<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
        ]);

        try {
            ContactUs::create([
                'full_name' => $request->name,
                'email' => $request->email,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return json_encode(['status' => true, 'msg' => 'فرم تماس شما با موفقیت ثبت شد.']);
        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'msg' => 'خطا در ثبت اطلاعات روی داد!']);
        }
    }
}
