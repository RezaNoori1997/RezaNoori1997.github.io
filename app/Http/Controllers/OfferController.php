<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'description' => 'required',
        ]);

        try {
            Offer::create([
                'email' => $request->email,
                'description' => $request->description,
            ]);

            return json_encode(['status' => true, 'msg' => 'با تشکر، پیشنهاد شما ثبت شد']);
        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'msg' => 'خطا در ثبت اطلاعات روی داد.']);
        }
    }
}
