<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/';

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'age' => ['required'],
            'height' => ['required'],
            'gender' => ['required'],
            'occupation' => ['required'],
            'avatar' => ['sometimes', 'image', 'mimes:png,jpg,jpeg,bmp,svg','max:5000']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(request()->has('avatar')){
            $avatarUpload = request()->file('avatar');
            $avatarName = time().'.'.$avatarUpload->getClientOriginalExtension();
            $avatarPath = public_path('/Frontend/images/');
            $avatarUpload->move($avatarPath, $avatarName);
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'age' => $data['age'],
                'height' => $data['height'],
                'gender' => $data['gender'],
                'occupation' => $data['occupation'],
                'avatar' => '/Frontend/images/'.$avatarName,
                'password' => Hash::make($data['password']),
            ]);
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'age' => $data['age'],
            'height' => $data['height'],
            'gender' => $data['gender'],
            'occupation' => $data['occupation'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
