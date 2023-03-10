<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Crypt;

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'phone'=>['required','regex:/(01)[0-9]{9}/'],
            'phone' => 'required|numeric',
            'age' => 'required|numeric',
        ]);

    }


    protected function create(array $data)
    {

if($data['image'] === null){
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'age' => $data['age'],
        'gender' => $data['gender'],
        'password' => Crypt::encrypt($data['password']),
    ]);

    return redirect(route('home'))->with(["create" => ["Title", "body text"]]);
}
else{
    /* 1. save image in variable */
    $image = $data['image'];

    /* 2. save extension image in variable */

    $extension = $image->getClientOriginalExtension();

    /* 3. change name image & save the new name in same extension */

    $change_name = "user-" . uniqid() . ".$extension";

    /* 4. move image in new folder */


    $image->move(public_path('update/users'), $change_name);

    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'image' => $change_name,
        'phone' => $data['phone'],
        'age' => $data['age'],
        'gender' => $data['gender'],
//        'password' => Crypt::encrypt($data['password']),
        'password' => Hash::make($data['password']),

    ]);

    return redirect(route('home'))->with(["create" => ["Title", "body text"]]);

}




    }
}
