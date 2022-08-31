<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialController extends Controller
{
    //

//    public function redirect()
//    {
//        return Socialite::driver('google')->user();
//    }
//
//    public function callback()
//    {
//        try {
//            $user = Socialite::driver('google')->user();
//            $user = User::where('google_id', $user->id)->first();
//
//            if($user){
//                Auth::login($user);
//                return redirect('home');
//            }else{
//                $newUser = User::create([
//                    'name' => $user->name,
//                    'email' => $user->email,
//                    'google_id'=> $user->id,
//                    'password' => encrypt('password123$')
//                ]);
//                Auth::login($newUser);
//                return redirect('home');
//            }
//        } catch (Exception $e) {
//            dd($e->getMessage());
//        }
//    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect('home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('password123$')
                ]);

                Auth::login($createUser);
                return redirect('home');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended('home');

            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->name,
                    'google_id'=> $user->id,
                    'password' => encrypt('password123#')
                ]);

                Auth::login($newUser);

                return redirect()->intended('home');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
