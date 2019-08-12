<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\UserProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\UploadFile;

class RegisterController extends Controller
{
    use UploadFile;
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
    protected $redirectTo = '/home';

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
            'username' => ['required','min:4','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'photo'    => ['image']
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
        $user =  User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $folder = '/images/avatar/';
        if($image = $data['photo']){
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)
                         . time() . '.' . $image->getClientOriginalExtension();
            $filepath = $folder . $imagename;
            $this->uploadOne($image, $folder,'public', $imagename);
        }
        else{
            $filepath = $folder . 'default.png';
        }

        UserProfile::create([
            'user_id'       => $user->id,
            'phone_number'  => $data['phone_number'],
            'local_address' => $data['local_address'],
            'district'      => $data['district'],
            'photo'         => $filepath,
        ]);

        return $user;
    }
}
