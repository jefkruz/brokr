<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'bank' => ['required', 'string', 'max:255'],
            'acc_name' => ['required', 'string', 'max:255'],
            'acc_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255','min:4','unique:users'],
            'phone' => ['required'],
            'referal_id' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'g-recaptcha-response' => ['required','captcha']
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'bank' => $data['bank'],
            'acc_number' => $data['acc_number'],
            'acc_name' => $data['acc_name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'referal_id' => $data['referal_id'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
        Mail::to($data['email'])
            ->send(new WelcomeMail($user));
    }
    public function showUniqueRegister($username)
    {
        $data['page_title'] = 'Register';

        $data['username'] = User::where('username', $username)->firstOrFail();
        return View('auth.uniqueregister', $data);
    }

    public function uniqueRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'bank' => 'required',
            'acc_name' => 'required',
            'acc_number' => 'required',
            'referral_id' => 'required',
            'phone' => 'required',
            'username' => 'required|min:4|unique:users',
            'password' => 'required|confirmed|min:8',
//            'g-recaptcha-response' => 'required|captcha'

        ]);

        $user_exist = User::where('username',$request->referral_id) ->first();


        $user = new User();
        $user->name = $request->name;
        $user->bank = $request->bank;
        $user->acc_name = $request->acc_name;
        $user->acc_number = $request->acc_number;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->referal_id = $user_exist->id;
        $user->username = $request->username;
        $user->password = hash::make($request->password);
        $user->save();



        Mail::to($user->email)
            ->send(new WelcomeMail($user));
        return redirect()->route('login')->with('success',' Registered');

    }
}
