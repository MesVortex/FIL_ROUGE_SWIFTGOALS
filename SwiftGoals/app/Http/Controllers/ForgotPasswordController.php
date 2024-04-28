<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forgetPassword');
    }


    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

       Mail::send('email.forget-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
            return redirect()->back()->with('succes', "We have send an email to reset password ");
        });
    }



    public function ResetPassword($token)
    {
        return view('auth.newPassword', compact('token'));
    }

    public function NewPassword(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users,email",
            'password' => ['required', 'confirmed'],
            'token' => 'required|exists:password_resets,token'
        ]);

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$updatePassword) {
            return redirect()->back()->with('error', 'invalid Email');
        }

        $updated =  User::where("email", $request->email)->update(['password' => Hash::make($request->password)]);

        if (!$updated) {
            return redirect()->back()->with('error', 'invalid Data');
        }

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
        ])->delete();

        return redirect('/login')->with('success', 'password changed with success');
    }
}

