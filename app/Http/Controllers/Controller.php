<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ServiceCenter;
use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function indexLanding()
    {
        $service_centers = ServiceCenter::where('status', 1)->take(3)->get();
        return view('site_pages.landing', compact('service_centers'));
    }

    public function indexBlog()
    {
        $articles = Article::latest()
            ->take(4)
            ->get();
        $videos = Video::latest()
            ->take(4)
            ->get();

        return view('site_pages.blog', compact('articles', 'videos'));
    }

    public function indexEducationalVideos()
    {
        $videos = Video::paginate(8);
        return view('site_pages.educational-videos', compact('videos'));
    }

    public function indexArticles()
    {
        $articles = Article::paginate(8);
        return view('site_pages.learning-articles', compact('articles'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'mobile' => 'required|string|size:11',
            'password' => 'required|string|min:6',

            'city' => 'nullable|exists:cities,id',
            'center_title' => 'nullable|string|min:6',
            'image' => 'nullable|file|mimes:jpg,png,webp,jpeg|max:2048',
        ]);

        try {
            if ($request->add == 1) {
                $user = User::create([
                    'role_id' => 3,
                    'name' => $request->fname,
                    'last_name' => $request->lname,
                    'mobile' => $request->mobile,
                    'password' => Hash::make($request->password),
                ]);

                if (isset($request->city) && isset($request->center_title) && isset($request->image)) {
                    $center = ServiceCenter::create([
                        'user_id' => $user->id,
                        'city_id' => $request->city,
                        'title' => $request->center_title,
                        'business_license' => '',
                    ]);

                    $image = $request->file('image');
                    $centerPatch = $this->getThisPatch('center-licenses');

                    $new_image_name = $centerPatch . str_random(18) . '.' . $image->getClientOriginalExtension();

                    $center->update([
                        'business_license' => $new_image_name,
                    ]);
                    $patch = storage_path('app/public') . $centerPatch;
                    $image->move($patch, $new_image_name);

                    Auth::login($user);
                    return json_encode(['status' => true, 'msg' => 'اطلاعات مرکز با موفقیت ثبت شد.']);
                } else {
                    $user->delete();
                    return json_encode(['status' => false, 'msg' => 'اطلاعات مرکز ناقص وارد شده است.']);
                }
            } else {
                $user = User::create([
                    'role_id' => 2,
                    'name' => $request->fname,
                    'last_name' => $request->lname,
                    'mobile' => $request->mobile,
                    'password' => Hash::make($request->password),
                ]);
                Auth::login($user);
                return json_encode(['status' => true, 'msg' => 'اطلاعات مشتری با موفقیت ثبت شد!']);
            }

        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return json_encode(['status' => false, 'msg' => 'خطا در ثبت اطلاعات']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('mobile', $request->mobile)->first();
        if (!empty($user)) {
            if (Hash::check($request->password, $user->password)) {
                \auth()->login($user);
                return json_encode(['status' => true, 'msg' => 'با موفقیت وارد شدید! در حال انتقال ... ']);
            } else {
                return json_encode(['status' => false, 'msg' => 'نام کاربری یا پسورد اشتباه وارد شده‌اند!']);
            }
        } else {
            return json_encode(['status' => false, 'msg' => 'کاربری با این شماره موبایل یافت نشد!']);
        }
    }

    public function getThisPatch($folderName)
    {
        $date = Carbon::now();
        $folder = $date->format('F') . $date->format('Y');
        $patch = '/' . $folderName . '/' . $folder;

        if (\Illuminate\Support\Facades\File::exists(storage_path('app/public/' . $patch))) {
            return $patch . '/';
        }
        //create patch and return that.
        \Illuminate\Support\Facades\File::makeDirectory(storage_path('app/public/' . $patch), 0777, true, true);
        return $patch . '/';
    }

    public function getCitiesFromProvince(Request $request)
    {
        $cities = DB::table('cities')
            ->where('province_id', $request->key)
            ->get();

        if (!$cities->isEmpty()) {
            return json_encode(['status' => true, 'data' => $cities]);
        } else {
            return json_encode(['status' => false, 'data' => 'شهری یافت نشد!']);
        }
    }

    public function indexDashboard(Request $request)
    {
        if (auth()->user()->role_id == 3) {
            $all_turns = DB::table('turns')
                ->where('center_id', auth()->user()->service_center->id)
                ->count();

            // Services queries.
            $services_query = DB::table('services')
                ->where('center_id', auth()->user()->service_center->id);

            $all_services = $services_query
                ->count();

            $this_month_services = $services_query
                ->whereMonth('created_at', '>=', Carbon::now()->subMonth()->month)
                ->count();
            $this_month_receipt = $services_query
                ->whereMonth('created_at', '>=', Carbon::now()->subMonth()->month)
                ->sum('payment');
        } else {
            $all_turns = DB::table('turns')->where('user_id', auth()->id())->count();

            $services_query = DB::table('services')
                ->where('user_id', auth()->id());

            $all_services = $services_query->count();

            $this_month_services = $services_query
                ->whereMonth('created_at', '>=', Carbon::now()->subMonth()->month)
                ->count();
            $this_month_receipt = $services_query
                ->whereMonth('created_at', '>=', Carbon::now()->subMonth()->month)
                ->sum('payment');
        }

        return view('client_pages.dashboard', compact('all_turns', 'all_services', 'this_month_services', 'this_month_receipt'));
    }

    public function indexProfile()
    {
        return view('client_pages.profile');
    }

    public function indexEditProfile()
    {
        return view('client_pages.edit-profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function getFreeTimes(Request $request)
    {
        $center = ServiceCenter::find($request->key);
        $freeTimes = [];
        $selected_times = $center->turns->pluck('pivot.start_time')->toArray();

        for ($i = $center->morning_time; $i < $center->noon_time; $i += 2) {
            if (!in_array($i, $selected_times)) {
                $freeTimes[] = '<span class="reserveTime badge badge-secondary bg-secondary"
                          style="padding: 10px 20px; margin: 5px; cursor: pointer;" data-free="1" data-from="' . $i . '" data-to="' . ($i + 2) . '">' . $i . ' تا ' . ($i + 2) . '</span>';
            } else {
                $freeTimes[] = '<span class="reserveTime badge badge-secondary bg-warning"
                          style="padding: 10px 20px; margin: 5px; cursor: pointer;" data-free="0">' . $i . ' تا ' . ($i + 2) . '</span>';
            }
        }

        for ($i = $center->evening_time; $i < $center->night_time; $i += 2) {
            if (!in_array($i, $selected_times)) {
                $freeTimes[] = '<span class="reserveTime badge badge-secondary bg-secondary"
                          style="padding: 10px 20px; margin: 5px; cursor: pointer;" data-free="1" data-from="' . $i . '" data-to="' . ($i + 2) . '">' . $i . ' تا ' . ($i + 2) . '</span>';
            } else {
                $freeTimes[] = '<span class="reserveTime badge badge-secondary bg-warning"
                          style="padding: 10px 20px; margin: 5px; cursor: pointer;" data-free="0">' . $i . ' تا ' . ($i + 2) . '</span>';
            }
        }

        return $freeTimes;
    }

    public function storeTurn(Request $request)
    {
        if (\auth()->check()) {
            if (\auth()->user()->role_id == 3) {
                return json_encode(['status' => false, 'msg' => 'صاحب مرکز نمی‌تواند نوبت بگیرد. لطفا با اکانت کاربر وارد شوید!']);
            } else {
                DB::table('turns')->insert([
                    'user_id' => Auth::id(),
                    'center_id' => $request->key,

                    'date' => Carbon::now()->toDateString(),
                    'start_time' => $request->from,
                    'end_time' => $request->to,

                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                return json_encode(['status' => true, 'msg' => 'نوبت با موفقیت ثبت گردید. در حال انتقال', 'url' => route('panel.dashboard')]);
            }
        } else {
            return json_encode(['status' => false, 'msg' => 'ابتدا بایستی در سیستم وارد شوید!']);
        }
    }

    public function indexTurns()
    {
        if (Auth::user()->role_id == 3) {
            // it is center's owner!
            $center = Auth::user()->service_center;

            $turns = $center
                ->turns()
                ->latest()
                ->get();
            return view('client_pages.turns', compact('turns'));
        } else {
            // it is normal user!

            $turns = Auth::user()
                ->turns()
                ->latest()
                ->get();
            return view('client_pages.turns', compact('turns'));
        }
    }

    public function indexServices()
    {
        if (Auth::user()->role_id == 3) {
            $center = Auth::user()->service_center;
            $services = $center
                ->services()
                ->latest()
                ->get();
        } else {
            $user = Auth::user();
            $services = $user
                ->services()
                ->latest()
                ->get();
        }
        return view('client_pages.services', compact('services'));
    }

    public function createService()
    {
        return view('client_pages.create_service');
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'user' => 'required',

            'current_km' => 'nullable|numeric',
            'next_km' => 'nullable|numeric',

            'p_2' => 'required|string|size:2',
            'p_3' => 'required|string|size:3',
            'p_alphabet' => 'required|string|size:1',
            'p_ir' => 'required|string|size:2',

            'payment' => 'required|numeric',
        ]);

        if ($request->current_km >= $request->next_km) {
            return json_encode(['status' => false, 'msg' => 'کیلومتر بعدی باید بزرگتر از کیلومتر فعلی باشد!']);
        }

        $center = Auth::user()->service_center;

        try {
            DB::table('services')->insert([
                'user_id' => $request->user,
                'center_id' => $center->id,

                'current_km' => $request->current_km,
                'next_km' => $request->next_km,

                'plaque_2' => $request->p_2,
                'plaque_alpha' => $request->p_alphabet,
                'plaque_3' => $request->p_3,
                'plaque_ir' => $request->p_ir,

                'oil_change' => isset($request->ch_oil) ? 1 : 0,
                'gearbox_oil_change' => isset($request->cg_oil_gearbox) ? 1 : 0,
                'differential_oil_change' => isset($request->cg_oil_def) ? 1 : 0,
                'oil_filter_replacement' => isset($request->ch_oil_filter) ? 1 : 0,
                'air_filter_replacement' => isset($request->ch_air) ? 1 : 0,
                'wind_adjustment' => isset($request->wind) ? 1 : 0,

                'payment' => $request->payment,

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            return json_encode(['status' => true, 'msg' => 'سرویس با موفقیت ثبت گردید! در حال انتقال ...', 'url' => route('panel.services')]);

        } catch (\Exception $exception) {

            Log::error($exception->getMessage());
            return json_encode(['status' => false, 'msg' => 'خطا در ثبت اطلاعات سرویس!']);
        }
    }
}
