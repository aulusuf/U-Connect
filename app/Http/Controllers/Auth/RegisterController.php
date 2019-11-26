<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

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
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
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
        if($data['gender']=='male') {

            $pic_path = 'user-solid-circle.svg';

        } else {

            $pic_path = 'user-solid-circle.svg';

        }

        $cover_path = 'asd.jpg';

        return User::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'slug' => str_slug($data['name'],'-'),
            'pic' => $pic_path,
            'cover' => $cover_path,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
    }

    // public function makeFolder(Request $request){
        
    //     $folder_path = public_path('users/{id}');

    //     if(!File::is_dir($folder_path)){

    //         Storage::makeFolder($folder_path, 0777, true, true);

    //     }
    //     dd($request);

    // }

}
