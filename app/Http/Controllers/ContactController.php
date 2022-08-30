<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    public function create()
    {
        return view('auth.forgot-password');
    }


    public function send()
    {
        request()->validate([
            'email' => ['required', 'email'],
        ]);

        Mail::to(request('email'))->send(new ContactMe());
        return redirect()->back()->with('success', 'A password reset link has been sent to your email');
    }

    public function createReset()
    {
        return view('auth.reset-password');
    }

    public function passwordReset(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'max:20'],
            'password_confirmation' => ['required', 'string', 'max:20'],
        ]);

        if($request->password != $request->password_confirmation){
            return redirect()->back()->with('error', 'Your passwords do not match');
        }else{

            $user = User::where('email', $request->email)->first();
            //dd($user);
            if($user == null){
                return redirect()->back()->with('error', 'The user with the specified email does not exist');
            }else{
                $user->password = bcrypt($request->password);
                $user->save();
                return redirect()->back()->with('success', 'your password has been reset successfully');   
            }
        }
    }
}
