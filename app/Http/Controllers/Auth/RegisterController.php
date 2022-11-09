<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
            'city' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
            'email' => $data['email'],
            'city' => $data['city'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(\Illuminate\Http\Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'city' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            //'user_id' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors([
                    'error' =>  $validator->errors()->first()
                ]);
        }
        $vf=new User();
            $vf['name']=$request->name;
            $vf['email']=$request->email;
            $vf['city']=$request->city;
            $vf['phone']=$request->phone;
            $vf['address']=$request->address;
            $vf->save();

        $user = User::where('email','=',$request->email)->first();
        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
