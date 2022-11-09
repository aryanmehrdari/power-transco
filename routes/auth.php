<?php
namespace Illuminate\Auth;
use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


use App\Models\Ad;
use App\Models\City;
use App\Models\User;
use App\Models\PasswordResets;
use App\Models\Cats;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

Route::group(['middleware' => ['auth','admin'], 'prefix' => "cp"], function () {
//Route::group(['middleware' => ['guest'], 'prefix' => "cp"], function () {

    Route::get('/dashboard', function () {

        if (isset($_GET["id"])!==false) {
            return redirect('/dashboard');
        }

        $city = City::all()->where("is_deleted",0)->toArray();
        $cit = Ad::all()->where("is_deleted",0)->toArray();
        $cats = Cats::all()->toArray();
        $cas = User::all()->pluck('id')->toArray();
        return view("admin-ads", [
            "cates" => $city,
            "cats" => $cats,
            "adds"=>'/ads',
            "iod"=>true,
            "ads"=>$cit,
            "usari"=>$cas,
            "image_path"=>''
        ]);

    })->name('register');

    Route::get('/saled', function () {


        return view("paired-admin");

    })->name('register');

    Route::post('/saled', function (Request $request) {

        if(isset($_POST["iod"])!==false)DB::connection('mysql')->table('paired')->where('id','=',$request->post('id'))->update(['status'=>'ارسال شد']);
        if(isset($_POST["uid"])!==false)DB::connection('mysql')->table('paired')->where('id','=',$request->post('id'))->update(['status'=>'درحال بررسی']);

        return 'وضعیت با موفقیت تغییر کرد.';

    })->name('register');



    Route::get('/ads', function (){
        if (isset($_GET["id"])!==false) {
            return redirect('/cp/dashboard');
        }

        $city = City::where("is_deleted",0)->get();
        $cit = Ad::where("is_deleted",0)->get();
        $cats = Cats::all()->toArray();
        $cas = User::all()->pluck('id')->toArray();
        return view("ad-register-form", [
            "cities" => $city,
            "cats" => $cats,
            "adds"=>'/ads',
            "ads"=>$cit,
            "usari"=>$cas,
            "image_path"=>'',
            "result"=>false
        ]);

    });

    Route::get('/cats', function (){
        $ads=Ad::all()->where('is_deleted','=','0')->pluck('id')->toArray();
        $cto=Cats::all()->toArray();
        $cate=City::all()->where('is_deleted','=','0')->pluck('id')->toArray();
        $catef=User::all()->pluck('id')->toArray();

        return view("ads-cat-list",[
            "axx"=>null,
            "ads"=>$ads,
            "cats"=>$cto,
            "cates"=>$cate,
            "usari"=>$catef,
            "result"=>false
        ]);

        /**
        return view("ads-cat-list", [
        "cities" => $city,
        "cats" => $cats,
        "adds"=>'/ads'
        ]);
         **/
    });

    Route::get('/brands', function (){
        $ads=Ad::all()->pluck('id')->toArray();
        $cto=Cats::all()->pluck('id')->toArray();
        $ctto=City::all()->toArray();
        $ctoto=User::all()->pluck('id')->toArray();

        return view("ads-brands",[
            "axx"=>null,
            "ads"=>$ads,
            "cats"=>$cto,
            "cates"=>$ctto,
            "usari"=>$ctoto
        ]);

        /**
        return view("ads-cat-list", [
        "cities" => $city,
        "cats" => $cats,
        "adds"=>'/ads'
        ]);
         **/
    });

    Route::get('/users', function () {
        $useri=User::all()->toArray();
        return view('dasham-users',['zari'=>$useri]);
    });

    Route::get('/change/', function (){

        //$ads= Ad::all()->where("is_deleted",'=',0)->pluck('id')->toArray();
        if(PHP_SESSION_NONE==session_status())session_start();
        isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;

        if(isset($_GET["id"])!==false && Ad::find($_GET["id"])) {

            $ads = Ad::find($_GET["id"]);
            $city = City::all()->toArray();
            $cats = Cats::all()->toArray();
            if (isset($_GET["id"]) !== false) {
                if (Ad::find($_GET["id"]) !== null) {
                    return view("admin-ad-edit", [
                        "cities" => $city,
                        "cats" => $cats,
                        "adds" => '/ads',
                        "ads" => $ads,
                        "result"=>false,
                        "dum"=>$ss
                    ]);
                } else {
                    return abort(404);
                }

            } else {

                return abort(404);
            }
        }else{
            return abort(404);
        }

    });

    Route::get('/edit-ad', function () {
        $city = City::where("is_deleted",0)->get();
        $cats = Cats::where("is_deleted", 0)->get();
        return view('admin-ad-edit', [
            "cities" => $city,
            "cats" => $cats,
            "adds"=>'/ads'
        ]);
    });

    Route::get('/edit_profile', function (){
        $ads = User::find(Auth::user()->id);
        $dop= Ad::all()->toArray();
        $city = City::all()->toArray();
        $cats = Cats::all()->toArray();
        $usz= User::all()->toArray();
        return view("dasham-settings", [
                    "cities" => $city,
                    "cats" => $cats,
                    "adds" => $dop,
                    "ads" => $ads,
                    "usari" =>$usz,
                    "result"=>false]);

    });


    Route::get('/users', function () {

        $useri=User::all()->toArray();
        return view('dasham-users',['zari'=>$useri]);
    });


    Route::post('/users', "App\\Http\\Controllers\\PagesController@delete_user");

    Route::post('/soft', "App\\Http\\Controllers\\PagesController@soft_delete");
    Route::post('/admin', "App\\Http\\Controllers\\PagesController@is_admin");



    Route::post('/add', "App\\Http\\Controllers\\PagesController@ChangeCat");
    Route::post('/bnd', "App\\Http\\Controllers\\PagesController@ChangeBnd");
    Route::post('/dashboard', "App\\Http\\Controllers\\PagesController@DeleteAd");

    Route::post('/edit_profile', "App\\Http\\Controllers\\PagesController@EditProfile");

    Route::post('/ads_p', "App\\Http\\Controllers\\PagesController@PAds");
    Route::post('/brand_p', "App\\Http\\Controllers\\PagesController@PBrand");
    Route::post('/cats_p', "App\\Http\\Controllers\\PagesController@ChangeProfile");

    Route::post('/ads', "App\\Http\\Controllers\\PagesController@Register");
    Route::post('/brands', "App\\Http\\Controllers\\PagesController@RegisterBrand");
    Route::post('/cats', "App\\Http\\Controllers\\PagesController@RegisterCat");

    /**CodedByDonVitoCorLeoNe!********************************************/
});
