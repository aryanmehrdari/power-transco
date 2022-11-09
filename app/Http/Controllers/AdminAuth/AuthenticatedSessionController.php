<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Ad;
use App\Models\Cats;

use App\Models\City;
use App\Models\PasswordResets;
use App\Models\User;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create():View
    {
        global $ste;
        //foreach ($_COOKIE as $giz=>$gaz){
            //unset($_COOKIE[$giz]);
        //}

        if(isset($_GET["ban"])!==false)return view("auth.admin.login",['ban'=>1]);

            $gaz = Ad::all()->pluck("tmp_path")->toArray();
            $udz = app('request')->input("forgot");
            $ud = base64_decode(urldecode($udz));
            $remember= Str::random(64);

                //if (User::all()->find(1)!==null)User::all()->find(1)->delete();
                if (Cats::all()->toArray() == []) {
                    DB::connection('mysql')->statement(/** @lang text */'SET FOREIGN_KEY_CHECKS=1');
                    DB::connection('mysql')->table('cats')->truncate();
                    $cats=new Cats();
                    $cats['id']="1";
                    $cats['cat']="unknown";
                    $cats->save();
                    DB::connection('mysql')->statement(/** @lang text */ 'ALTER TABLE cats AUTO_INCREMENT = 2');
                }
                if (City::all()->toArray() == []) {
                    DB::connection('mysql')->statement(/** @lang text */'SET FOREIGN_KEY_CHECKS=1');
                    DB::connection('mysql')->table('city')->truncate();
                    $cats=new City();
                    $cats['id']="1";
                    $cats['title']="unknown";
                    $cats->save();
                    DB::connection('mysql')->statement(/** @lang text */ 'ALTER TABLE city AUTO_INCREMENT = 2');
                }
                if (Ad::all()->toArray() == []) {
                    DB::connection('mysql')->statement(/** @lang text */'SET FOREIGN_KEY_CHECKS=1');
                    DB::connection('mysql')->table('ad')->truncate();
                    $hits = new Ad();
                    $hits["id"] = '1';
                    $hits['title'] = 'Example Ad';
                    $hits["text_content"] = 'Lorem ipsom is whertereee fddgfdg gdfhdfhg';
                    $hits['tmp_path'] = '1626635852';
                    $hits['img_path'] = 'unknown-photo.jpg';
                    $hits['is_deleted'] = '0';
                    $hits['price'] = "1000";
                    $hits['city_id'] = "1";
                    $hits['cat_id'] = "1";
                    $hits['star'] = "4";
                    $hits->save();
                    DB::connection('mysql')->statement(/** @lang text */ 'ALTER TABLE ad AUTO_INCREMENT = 1');
                }
                if (User::all()->toArray() == []){
                    DB::connection('mysql')->statement(/** @lang text */'SET FOREIGN_KEY_CHECKS=1');
                    DB::connection('mysql')->table('users')->truncate();
                    $user = new User();
                    $user['id'] = "1";
                    $user['name'] = "unknown";
                    $user['email'] = "unknown@gmail.com";
                    $user['is_admin'] = '1';
                    $user['is_deleted'] = '0';
                    $hits["user_image"] = "avatar-logo.png";
                    $user['city'] = 'unknown';
                    $user['address'] = 'unknown';
                    $user['password'] = Hash::make('123456789');
                    $user['phone'] = '+12345678';
                    $user['remember_token'] = $remember;
                    $user->save();
                    DB::statement(/** @lang text */ 'ALTER TABLE users AUTO_INCREMENT = 2');
                    $jou = new PasswordResets();
                    DB::table('password_resets')->truncate();
                    $jou['email'] = 'unknown@gmail.com';
                    $jou['token'] = $remember;
                    $jou->save();
                    DB::statement(/** @lang text */ 'ALTER TABLE password_resets AUTO_INCREMENT = 2');
                }
                return view("auth.admin.login",['ban'=>0]);
                //return view("auth.admin.login",['ban'=>0,'ste'=>1]);
    }


    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            setcookie('email',$request->email,time()+86400,'/cp/login');
            setcookie('password',$request->password,time()+86400,'/cp/login');
            setcookie('remember',$request->remember,time()+86400,'/cp/login');
        }

        try {
            $request->authenticate();
        } catch (ValidationException $e) {
            $request->session()->regenerate();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->back()->withErrors(['ایمیل یا رمزعبور اشتباه است.']);
        }

        if($request->user()['is_admin']!==1){
            Auth::guard('web')->logout();
            $request->session()->regenerate();
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->back()->withErrors(['شما ادمین نیستید.']);
        }

        if($request->user()->isDeleted()){
            Auth::guard('web')->logout();
            $request->session()->regenerate();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/cp/login?ban=1');
        }
        else{
            return redirect()->intended(RouteServiceProvider::AdminHOME);
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->regenerate();

        return redirect('/');
    }
}
