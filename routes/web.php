<?php

use App\Http\Controllers\MailController;
use App\Mail\DemoMail;
use App\Models\Ad;
use App\Models\Cats;
use App\Models\City;
use App\Models\Paired;
use App\Models\User;
use App\Notifications\PasswordReset;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Passport\Passport;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        if(PHP_SESSION_NONE==session_status())session_start();

        isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;

        return view('welcome',["dum"=>$ss,'root'=>false]);
})->name('asli');

    /**
    Route::get('/paired', function () {
        if(PHP_SESSION_NONE==session_status())session_start();


        return view('paired-ad',["result"=>"0"]);
})->name('pair');
     **/

    Route::post('/delete-acc', function (Request $request) {
        if(PHP_SESSION_NONE==session_status())session_start();
        isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;
        DB::connection('mysql')->table('users')->where('id', $_GET["id"])->delete();

        return view('welcome',["dum"=>$ss,'root'=>true]);
})->name('asli');

    /**
    Route::get('/register', function () {
    return view('auth.register');
});
     **/

    Route::get('/product', function () {
        if(PHP_SESSION_NONE==session_status())session_start();

        isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;



        if(isset($_GET["cat"])!==false||isset($_GET["brand"])!==false||isset($_GET["sort"])!==false||isset($_GET["ad_search_query"])!==false){

            if(isset($_GET["ad_search_query"])!==false){
                $q= trim($_GET["ad_search_query"]);
                $ads=Ad::where("title","LIKE","%$q%")
                    ->orWhere("text_content","LIKE","%$q%")
                    ->paginate(12);

                $cas=Cats::all()->toArray();
                $ciz=City::all()->toArray();
                return view('prudoct',['ads'=>$ads,'cat'=>$cas,'cit'=>$ciz,'result'=>false,"dum"=>$ss]);

            }

            if(isset($_GET["cat"])!==false && Cats::find($_GET["cat"])!==null) {
                $ads=Ad::where('cat_id','=',$_GET["cat"])->paginate(12);
                $cas=Cats::all()->toArray();
                $ciz=City::all()->toArray();
            }else{
                if(isset($_GET["brand"])!==false && Cats::find($_GET["brand"])!==null) {
                    $ads=Ad::where('city_id','=',$_GET["brand"])->paginate(12);
                    $cas=Cats::all()->toArray();
                    $ciz=City::all()->toArray();
                }else{
                    if(isset($_GET["sort"])!==false){
                        if ($_GET["sort"]=='0'){
                            $ads=Ad::paginate(12);
                        }else{
                            if ($_GET["sort"]=='1'){
                                $ads=Ad::orderBy('star','DESC')->paginate(12);
                            }else{
                                if ($_GET["sort"]=='2'){
                                    $ads=Ad::orderBy('price','ASC')->paginate(12);
                                }else{
                                    if ($_GET["sort"]=='3'){
                                        $ads=Ad::orderBy('price','DESC')->paginate(12);
                                    }else{
                                        if ($_GET["sort"]=='4'){
                                            $ads=Ad::orderBy('id','DESC')->paginate(12);
                                        }else{
                                            $ads=[];
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //$ads=[];
                    $cas=Cats::all()->toArray();
                    $ciz=City::all()->toArray();
                }

            }

        }else{
            $ads=Ad::paginate(12);
            $cas=Cats::all()->toArray();
            $ciz=City::all()->toArray();
        }

    return view('prudoct',['ads'=>$ads,'cat'=>$cas,'cit'=>$ciz,'result'=>false,"dum"=>$ss]);
});

    Route::get('/contact', function (){
        //$ads=Hits::with(["cats"])->get();
        //$cto=Cats::with(["hits"])->get();
        if(PHP_SESSION_NONE==session_status())session_start();

        isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;


        return view("contact",["dum"=>$ss]);

    });

    Route::get('/single/', function (){
        //dd(array_diff(scandir(public_path('user-photos')), array('.', '..')));
        if(PHP_SESSION_NONE==session_status())session_start();
        if(isset($_GET["id"])!==false && Ad::find($_GET["id"])!==null) {

            //return $_SESSION;
            isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;

            $allz=Ad::find($_GET["id"]);
            $ads= array_diff(scandir(public_path("user-photos/".$allz->tmp_path)), array('.', '..',$allz->img_path));
            $city = City::all()->toArray();
            $cats = Cats::all()->toArray();
            $scn = array_diff(scandir(public_path('user-photos/'.$allz->tmp_path)), array('.', '..'));


            return view("ad-single", [
                "cities" => $city,
                "cats" => $cats,
                "adds" => $scn,
                "ads" => $ads,
                "fioz"=>$allz,
                "dum"=>$ss

            ]);
        }else{
            return abort(404);
        }
        //return count($_SESSION);





    });

    Route::get('/buy', function (){
        if(PHP_SESSION_NONE==session_status())session_start();
        //global $foz;
        $foz=[];
        //unset($_SESSION["listesh"]);
        //return $_SESSION;
        if(isset($_SESSION["listesh"])!==false){
            foreach ($_SESSION["listesh"] as $def){
                $foz[$def]=Ad::find($def)->price;
            }
            //if($foz==[])$foz=[];
        }else{
            $foz=[];
            $_SESSION["listesh"]=$foz;
        }
        $foz=array_sum($foz);

        //return $foz;

            $dop='';
            $ads=Ad::all()->toArray();


        return view("dasham-profile", [
            "adds" => $dop,
            "ads" => $ads,
            "fiz"=>$foz,
            "result"=>false]);

    });


    //Route::get('/send-mail', [MailController::class, 'index']);


    Route::get('/forgot-password', function () {
        foreach ($_COOKIE as $giz=>$gaz){
            unset($_COOKIE[$giz]);
        }

        return view('auth.forgot-password',['status' => true]);
    })->middleware('guest')->name('forget.password.get');

    Route::post('/forgot-password', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['error' =>  $validator->errors()->first()]);
        }



/**
        $mailData = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp.'
        ];

        Mail::to($request->email)->send(new DemoMail($mailData));
*/
/**
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('emails.demoMail', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });


        if (Mail::failures()) {
            $status='ایمیل صحیح نیست لطفا ایمیل خود را چک کنید و دوباره امتحان کنید.';
            return back()->withErrors(['email' => __($status)]);
        }else{
            $status='ما ایمیل بازیابی را به ایمیلتان ارسال کردیم. لطفا ایمیل خود را چک کنید.';
            return back()->with(['status' => __($status)]);
        }
*/

/**
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
 */

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('emails.demoMail', ['token' => $token,'email'=>$request->email], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        $status='ما ایمیل بازیابی را به ایمیلتان ارسال کردیم. لطفا ایمیل خود را چک کنید.';
        return back()->with(['status' => __($status)]);

    })->middleware('guest')->name('forget.password.post');



    Route::get('/reset-password/{token}', function ($token) {
        isset($_GET['email'])!==false?$email=trim($_GET['email']):$email='';
        return view('auth.reset-password', ['token' => $token,'email'=>$email]);
    })->middleware('guest')->name('reset.password.get');

    Route::post('/reset-password', function (Request $request) {

        /**
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->regenerate();
        foreach ($_COOKIE as $giz=>$gaz){
            unset($_COOKIE[$giz]);
        }


        if($status === Password::PASSWORD_RESET){
            return redirect()->route('login')->with('status', __($status));
        } else{
            return back()->withErrors(['email' => [__($status)]]);
        }
         */

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        Auth::login(User::where('email',$request->email)->first());
        return redirect()->intended(RouteServiceProvider::HOME);



    })->middleware('guest')->name('reset.password.post');







    Route::get('/cp/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('lcp');
    Route::post('/cp/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest')->name('cpl');

    Route::post('/single', "App\\Http\\Controllers\\PagesController@AddtoCart");
    Route::post('/buy', "App\\Http\\Controllers\\PagesController@BuyCart");

    Route::post('/comment', "App\\Http\\Controllers\\PagesController@Commenting");
    Route::post('/rating', "App\\Http\\Controllers\\PagesController@Rating");
    Route::post('/order', "App\\Http\\Controllers\\PagesController@Sorting");

    Route::post('/search-sug', "App\\Http\\Controllers\\PagesController@search_sug");
    Route::post('/search', "App\\Http\\Controllers\\PagesController@search");









    /**-----------------------------------------**/



});


require __DIR__ . '/auth.php';




//Auth::routes();

//Route::get('/home', function () {
 //   return view('home');
//});



Auth::routes();

Route::get("/home", function () {
    Auth::user() ? $ads = User::find(Auth::user()->id) : abort(404);
    if(PHP_SESSION_NONE==session_status())session_start();

    isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;
    $dop = Ad::all()->toArray();
    $city = City::all()->toArray();
    $cats = Cats::all()->toArray();
    $usz = User::all()->toArray();
    return view("dasham-settings", [
        "cities" => $city,
        "cats" => $cats,
        "adds" => $dop,
        "ads" => $ads,
        "usari" => $usz,
        "result" => false,
    "dum"=>$ss]);

})->name('home');

Auth::routes();

Route::post('/home', "App\\Http\\Controllers\\PagesController@EditProfile");

Auth::routes();

Route::get('/checkout', function (Request $request) {

    if(PHP_SESSION_NONE==session_status())session_start();
    isset($_GET["amount"])?$amount=trim($_GET["amount"]):abort(404);
    isset($_GET["desc"])?$description=trim($_GET["desc"]):abort(404);
    isset($_GET["email"])?$email=trim($_GET["email"]):abort(404);
    isset($_GET["mobile"])?$mobile=trim($_GET["mobile"]):abort(404);
    isset($_GET["io"])?$_SESSION["kamel"]=json_decode($_GET["io"],true):abort(404);


    view("paired-ad",["result"=>"0"]);



    function url_origin( $s, $use_forwarded_host = false ): string
    {
        $ssl      = ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on';
        $protocol = substr( strtolower( $s['SERVER_PROTOCOL'] ), 0, strpos(strtolower($s['SERVER_PROTOCOL']), '/' ) ) . ( ( $ssl ) ? 's' : '' );
        $port     = ( ( ! $ssl && $s['SERVER_PORT']=='80' ) || ( $ssl && $s['SERVER_PORT']=='443' ) ) ? '' : ':'.$s['SERVER_PORT'];
        $host     = isset( $host ) ? ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] )==true ? $s['HTTP_HOST'] : null ) : $s['SERVER_NAME'] . $port;
        return $protocol . '://' . $host;
    }

    function full_url( $s, $use_forwarded_host = false ): string
    {
        return url_origin( $s, $use_forwarded_host );
    }

    if(PHP_SESSION_NONE==session_status())session_start();

    if($amount!==''&&$description!==''&&$email!==''&&$mobile!==''){
        $merchant_id="MyMerchant";
        $call_back_url=full_url($_SERVER)."/done";

        $client=new SoapClient("https://de.zarinpal.com/pg/services/WebGate/wsdl",array('encoding'=>'UTF-8'));
        $result = $client->PaymentRequest(
            array(
                "MerchantID"=>$merchant_id,
                "Amount"=>$amount,
                "Description"=>$description,
                "Email"=>$email,
                "Mobile"=>$mobile,
                "CallbackURL"=>$call_back_url
            )
        );
        if ($result->Status==100){
            $_SESSION["amount"]=$amount;
            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        }else{
            //return 'error/'.$result->Status;
            return view("paired-ad",["result"=>"2"]);

        }
    }else{
        return view("paired-ad",["result"=>"2"]);
    }

});

Auth::routes();

Route::get('/done', function () {

    if(PHP_SESSION_NONE==session_status())session_start();
    isset($_GET["Status"])?$status=trim($_GET["Status"]):abort(404);
    isset($_GET["Authority"])?$authority=trim($_GET["Authority"]):abort(404);
    isset($_SESSION["kamel"])?$kamel=$_SESSION["kamel"]:abort(404);
    Auth::user()?$user=Auth::user():abort(404);


    if($status!==''&&$authority!==''){
        $merchant_id="MyMerchant";

        $client=new SoapClient("https://de.zarinpal.com/pg/services/WebGate/wsdl",array('encoding'=>'UTF-8'));
        $result = $client->PaymentVerification(
            array(
                "MerchantID"=>$merchant_id,
                "Amount"=>$_SESSION["amount"],
                "Authority"=>$authority
            )
        );
        if ($result->Status==100){
            //return 'OK/'.$result->Authority;
            foreach ($kamel as $koz=>$kiz){
                $pair=new Paired();
                $pair["user_id"]=$user->id;
                $pair["ref_id"]=$result->RefID;
                $pair["ad_name"]=Ad::find($koz)->title;
                $pair["ad_count"]=$kiz/Ad::find($koz)->price;
                $pair["price"]=$_SESSION["amount"];
                $pair["price_count"]=$kiz;
                $pair["name"]=$user->name;
                $pair["phone"]=$user->phone;
                $pair["email"]=$user->email;
                $pair["city"]=$user->city;
                $pair["address"]=$user->address;
                $pair->save();
            }
            return view("paired-ad",["result"=>"1"]);

        }else{
            //return 'error/'.$result->Status;
            return view("paired-ad",["result"=>"2"]);

        }
    }else{
        //return 'Null/0';
        return view("paired-ad",["result"=>"2"]);
    }

});

Auth::routes();

Route::get('/saled',function (){
    $arc=array_sum(Paired::all()->where('user_id','=',Auth::user()->id)->where('status','=','درحال بررسی')->pluck('price_count')->toArray());
    return view("paired-user",["jam"=>$arc]);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
