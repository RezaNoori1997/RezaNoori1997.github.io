<?php

namespace App\Http\Controllers;

use App\Models\NewsMember;
use Illuminate\Http\Request;

class NewsMemberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (NewsMember::where('email', $request->email)->exists()) {
            return json_encode(['status' => false, 'msg' => 'ایمیل تکراری می‌باشد. این ایمیل قبلا ثبت شده است!']);
        } else {
            NewsMember::create([
                'email' => $request->email,
            ]);
            return json_encode(['status' => true, 'msg' => 'ایمیل شما در خبرنامه ایساکو سرویس ثبت گردید. برای تائید لطفا ایمیل خود را چک کنید.']);
        }
    }
}
