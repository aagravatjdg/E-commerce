<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'number' => ['required', 'max:10', 'unique:users','min:10'],
            'profile_pic' => 'required|mimes:jpeg,png,jpg,gif|max:5090|image',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender'=>['required'],
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
        $profilePicPath = null; // Initialize to null

        if (isset($data['profile_pic'])) {
            $profilePic = $data['profile_pic'];

            // Validate and store the profile picture
            $profilePicPath = $this->storeProfilePic($profilePic);
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type'=>'User',
            'number' => $data['number'],
            'profile_pic' => $profilePicPath,
            'status'=>'Active',
            'gender'=>$data['gender'],
        ]);
    }
    protected function storeProfilePic($profilePic)
    {
        $name = uniqid() . "." . $profilePic->getClientOriginalExtension();
        $profilePic->move('public/Profile_Image', $name);
        // Return the path to be stored in the user record
        return $name;
    }
}
