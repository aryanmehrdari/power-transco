<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Admins;
use App\Models\Average;
use App\Models\Cat;
use App\Models\Cats;
use App\Models\City;
use App\Models\Comment;
use App\Models\Hits;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function Symfony\Component\Translation\t;


class PagesController extends Controller
{

    public function AdList()
    {
        $ads = Ad::with(["city", "cat"])->get();

        return view("ads-list", [
            "ads" => $ads
        ]);
    }

    public function Rating(Request  $request)
    {

        if($_POST["star"]!==''){
            $trust=new Average();
            $trust["rate"]=$_POST["star"];
            $trust["ad_id"]=$_POST["adid"];
            $trust->save();
            $avg=Average::all()->where('ad_id','=',$_POST["adid"])->avg('rate');
            if($avg<=5){
                $avgo=round($avg,1);
                DB::connection('mysql')->table('ad')->where('id',$_POST["adid"])->update([
                    "star" => $avgo]);
            }else{
                $avgo=5;
                DB::connection('mysql')->table('ad')->where('id',$_POST["adid"])->update([
                    "star" => $avgo]);
            }
            return 'successfully rated!';
        }else{
            return 'Please try later!';
        }

    }

    public function Commenting(Request $request)
    {

        $validator = Validator::make($request->all(), [
            //'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'comment' => 'required|max:255',
            'ad_id' => 'required|max:255',
            'user_id' => 'required|max:255',
            'star' => 'required|max:255',
            ]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'success' => false,
                    'error' =>  $validator->errors()->first()
                ]);
        }

        if(Comment::all()->where('user_id','=',$request->user_id)->toArray()!==[])return 'نظر شما قبلا ثبت شده است.';

        if($_POST["star"]!==''){
            $trust=new Average();
            $trust["rate"]=$_POST["star"];
            $trust["ad_id"]=$request->ad_id;
            $trust->save();
            $avg=Average::all()->where('ad_id','=',$request->ad_id)->avg('rate');
            if($avg<=5){
                $avgo=round($avg,1);
                DB::connection('mysql')->table('ad')->where('id',$request->ad_id)->update([
                    "star" => $avgo]);
            }else{
                $avgo=5;
                DB::connection('mysql')->table('ad')->where('id',$request->ad_id)->update([
                    "star" => $avgo]);
            }
        }else{
            return 'Please try later!';
        }
        $reg=new Comment();
        $reg["comment"]=$request->comment;
        $reg["ad_id"]=$request->ad_id;
        $reg["user_id"]=$request->user_id;
        $reg["star"]=$request->star;
        $reg->save();

        return 'your comment has successfully sent!';
    }

    public function EditProfile(Request $request)
    {

        if($request->hasFile('photo')){

            $validatoor = Validator::make($request->all(), [
                'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
                'user_id'=> 'required|max:255'
            ]);

            if ($validatoor->fails()) {
                return response()
                    ->json([
                        'success' => false,
                        'error' =>  $validatoor->errors()->first()
                    ]);
            }
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');

                $fileName = "user_" . $request->user_id . "." . $photo->getClientOriginalExtension();
                $request->file('photo')->move(public_path('user-photos'), $fileName);
            }

            DB::connection('mysql')->table('users')->where('id', $request->user_id)->update([
                'user_image'=>$fileName
            ]);

            return 'your photo Successsfully uploaded!';

        }else{

            $validator = Validator::make($request->all(), [
                //'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
                'name' => 'required|max:255',
                'email' => 'required|max:255',
                'city' => 'required|max:255',
                'phone' => 'required|max:255',
                'address' => 'required|max:255',
                'user_id' => 'required|max:255',
            ]);

            if ($validator->fails()) {
                return response()
                    ->json([
                        'success' => false,
                        'error' =>  $validator->errors()->first()
                    ]);
            }
            DB::connection('mysql')->table('users')->where('id', $request->user_id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'city'=>$request->city,
                'phone'=>$request->phone,
                'address'=>$request->address
            ]);
        }

        $ads = User::find($request->user_id);
        $city = City::all()->toArray();
        $cats = Cats::all()->toArray();
        return view("dasham-settings", [
            "cities" => $city,
            "cats" => $cats,
            "adds" => '/ads',
            "ads" => $ads,
            "result"=>true]);


    }

    public function AddtoCart(Request $request){
        if(PHP_SESSION_NONE==session_status())session_start();

        if(isset($_SESSION["listesh"])!==false){
            $ret=$_GET["id"];
            if(in_array($ret,$_SESSION["listesh"])!==true)array_push($_SESSION["listesh"],$ret);
            //return $_SESSION;
        }else{
            $_SESSION["listesh"]=array($_GET["id"]);
            //return $_SESSION;
        }

        $dds=count($_SESSION["listesh"]);

        $allz=Ad::find($request->ad_id);
        $ads= array_diff(scandir(public_path('user-photos/'.$allz->tmp_path)), array('.', '..',$allz->img_path));
        $city = City::all()->toArray();
        $cats = Cats::all()->toArray();
        $scn = array_diff(scandir(public_path('user-photos/'.$allz->tmp_path)), array('.', '..'));

        return view("ad-single", [
            "cities" => $city,
            "cats" => $cats,
            "adds" => $scn,
            "ads" => $ads,
            "fioz"=>$allz,
            "dum"=>$dds

        ]);
    }

    public function BuyCart(Request $request)
    {
        if(PHP_SESSION_NONE==session_status())session_start();
        if($_POST["ad_id"]){
            if(isset($_SESSION["listesh"])!==false) {
                $_SESSION["listesh"]=array_diff($_SESSION["listesh"],[$_POST["ad_id"]]);
                if ($_SESSION["listesh"] == []) unset($_SESSION["listesh"]);
                //return $_SESSION;
            }

            return 'Ad was Removed Successfully.';
        }
    }

    public function delete_user(Request $request): array
    {

        $cat = DB::connection('mysql')->table('users')->where('id', $request->post('id'))->delete();

        if ($cat>0) {
            $result = 'true';
        }else{
            $result = 'false';
        }
        if($result!=='true'){
            return [$result=>'Oops error in deleting please try again!'];
        }else{
            return [$result=>'User successfullly Deleted!'];
        }

    }

    /** @noinspection PhpUnused */
    public function soft_delete(Request $request)
    {
        $result = false;

        if($request->post('delete_or_not')=='1'){
            $cat = DB::connection('mysql')->table('users')->where('id','=',$request->post('id'))->update(['is_deleted'=>1]);
        }else{
            $cat = DB::connection('mysql')->table('users')->where('id','=',$request->post('id'))->update(['is_deleted'=>0]);
        }

        if ($cat) {
            $result = true;
        }

        return response()->json($result);
    }

    public function is_admin(Request $request)
    {
        $result = false;

        if($request->post('is_admin')=='1'){
            $cat = DB::connection('mysql')->table('users')->where('id','=',$request->post('id'))->update(['is_admin'=>1]);
        }else{
            $cat = DB::connection('mysql')->table('users')->where('id','=',$request->post('id'))->update(['is_admin'=>0]);
        }

        if ($cat) {
            $result = true;
        }

        return response()->json($result);
    }


    public function Register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            //'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'image_path' => 'required|max:255',
            'tmp_path' => 'required|max:255',
            'ad_title' => 'required|max:255',
            'mojudi' => 'required|max:255',
            'ad_text_content' => 'required|max:2000',
            'ad_cat_id' => 'required|max:2000',
            'ad_city_id' => 'required|max:2000',
            'price' => 'required|max:2000',
        ]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'success' => false,
                    'error' =>  $validator->errors()->first()
                ]);
        }

        if(isset($_GET["id"])!==false && Ad::find($_GET["id"])){
            $ad=DB::connection('mysql')->table('ad')->where('id', $_GET["id"])->update([
                "title" => $request->ad_title,
            "text_content" => $request->ad_text_content,
            "img_path" => $request->image_path,
            "tmp_path" => $request->tmp_path,
            "is_deleted" => $request->mojudi,
            "price" => $request->price,
            "city_id" => $request->ad_city_id,
            "cat_id" => $request->ad_cat_id,
            ]);
            $result='1';

        }else{
            $ad = new Ad();
            $ad["title"] = $request->ad_title;
            $ad["text_content"] = $request->ad_text_content;
            $ad["img_path"] = $request->image_path;
            $ad["tmp_path"] = $request->tmp_path;
            $ad["is_deleted"] = $request->mojudi;
            $ad["price"] = $request->price;
            $ad["city_id"] = $request->ad_city_id;
            $ad["cat_id"] = $request->ad_cat_id;

            $ad->save();
            $result = true;


        }


        if ($ad) {
            $allPth=Ad::all()->pluck('tmp_path')->toArray();
            $dirz=array_diff(scandir(public_path('/user-photos/')), array('.', '..'));

            foreach ($dirz as $diz){
                if(!in_array($diz,$allPth)){
                    File::deleteDirectory(public_path('/user-photos/' . $diz));
                }
            }



        }



        $city = City::where("is_deleted",0)->get();
        $cit = Ad::where("is_deleted",0)->get();
        $cats = Cats::all()->toArray();
        $cas = User::all()->pluck('id')->toArray();
        //return view("register_ad_result", [
        return view("ad-register-form", [
            "cities" => $city,
            "cats" => $cats,
            "adds"=>'/ads',
            "ads"=>$cit,
            "usari"=>$cas,
            "image_path"=>'',
            "result" => $result
        ]);
    }

    public function SingleAd(Request $request)
    {

        $ad_id= $request->id;
        $ad=Ad::where("id",$ad_id)->first();

        return view("ad-single", [
            "ad" => $ad
        ]);

    }

    public function RegisterCat(Request $request)
    {

        $validated = $request->validate([
            'onvan' => 'required|max:255'
            //'image_path' => 'required|max:2000',
        ]);


        $result = false;


        $title = $request->onvan;
        //$image_path = $request->image_path;


        $ad = new Cats();
        $ad["cat"] = $title;
        //$ad["is_deleted"] = '0';
        //$ad["img_path"] = $image_path;

        $ad->save();

        if ($ad) {
            $result = true;
        }


        //return view("register_ad_result", [
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
            "result"=>$result
        ]);

    }

    public function ChangeCat(Request $request)
    {

        $validated = $request->validate([
            'changeghaleb' => 'max:255',
            'delghaleb' => 'max:255',
            'jash' => 'max:2000',
            'masiri' => 'max:2000',
        ]);

        if ($request->only('delghaleb')) {
            DB::connection('mysql')->table('cats')->where('id', $request->post('delghaleb'))->delete();
            //File::deleteDirectory(public_path('api/v1/' . $request->post('masiri')));
            //File::delete(public_path('user-photos/').$request->post('masiri').'.txt');
            return ['success' => true,
                'message' => 'Successfully updated',
            ];
        }


        if ($request->only('changeghaleb')) {
            DB::connection('mysql')->table('cats')->where('id', $request->post('jash'))->update(['cat' => $request->post('changeghaleb')]);
            return ['success' => true,
                'message' => 'Successfully updated',
            ];
        }




        //return view("register_ad_result");

    }

    public function ChangeBnd(Request $request)
    {

        $validated = $request->validate([
            'changeghaleb' => 'max:255',
            'delghaleb' => 'max:255',
            'jash' => 'max:2000',
            'masiri' => 'max:2000',
        ]);

        if ($request->only('delghaleb')) {
            DB::connection('mysql')->table('city')->where('id', $request->post('delghaleb'))->delete();

            //File::deleteDirectory(public_path('api/v1/' . $request->post('masiri')));
            //File::delete(public_path('user-photos/').$request->post('masiri').'.txt');
            return ['success' => true,
                'message' => 'Successfully updated',
            ];
        }


        if ($request->only('changeghaleb')) {
            DB::connection('mysql')->table('city')->where('id', $request->post('jash'))->update(['title' => $request->post('changeghaleb')]);
            return ['success' => true,
                'message' => 'Successfully updated',
            ];
        }




        //return view("register_ad_result");

    }

    public function DeleteAd(Request $request)
    {

        if ($_GET["id"]!=='') {
            if(in_array($_GET["id"],Ad::all()->pluck('id')->toArray())){
                if(Ad::find($_GET["id"])->id!==1)File::delete(public_path('user-photos/').Ad::find($_GET["id"])->img_path);
                if(Ad::find($_GET["id"])->id!==1)File::deleteDirectory(public_path('user-photos/' . Ad::find($_GET["id"])->tmp_path));
                DB::connection('mysql')->table('ad')->where('id', $_GET["id"])->delete();
                $city = City::where("is_deleted",0)->get();
                $cit = Ad::where("is_deleted",0)->get();
                $cats = Cats::all()->toArray();
                $cas = User::all()->pluck('id')->toArray();
                return view("admin-ads", [
                    "cates" => $city,
                    "cats" => $cats,
                    "adds"=>'/ads',
                    "iod"=>false,
                    "ads"=>$cit,
                    "usari"=>$cas,
                    "image_path"=>''
                ]);
            }else{
                return abort(404);
            }

        }else{
            return abort(404);
        }



        //return view("register_ad_result");

    }

    public function RegisterBrand(Request $request)
    {

        $validated = $request->validate([
            'onvan' => 'required|max:255',
            //'image_path' => 'required|max:2000',
        ]);


        $result = false;


        $title = $request->onvan;
        $image_path = $request->image_path;


        $ad = new City();
        $ad["title"] = $title;
        $ad["is_deleted"] = '0';
        //$ad["img_path"] = $image_path;

        $ad->save();

        if ($ad) {
            $result = true;
        }


        //return view("register_ad_result", [
        $ads=Ad::all()->pluck('id')->toArray();
        $cto=Cats::all()->pluck('id')->toArray();
        $ctto=City::all()->toArray();
        $ctoto=User::all()->pluck('id')->toArray();

        return view("ads-brands",[
            "result"=>$result,
            "axx"=>true,
            "ads"=>$ads,
            "cats"=>$cto,
            "cates"=>$ctto,
            "usari"=>$ctoto
        ]);

    }

    /****************************************************************************/

    public function ChangeProfile(Request $request)
	 {

         $validator = Validator::make($request->all(), [
             'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
             'onvan' => 'max:2000'
         ]);

         if ($validator->fails()) {
             return response()
                 ->json([
                     'success' => false,
                     'error' =>  $validator->errors()->first()
                 ]);
         }
         $fileName='';
         if ($request->hasFile('photo')) {
             $photo = $request->file('photo');

             $fileName = "cat_" . time() . "." . $photo->getClientOriginalExtension();
             $request->file('photo')->move(public_path('user-photos'), $fileName);


         }

         return [
             'success'=>true,
             'message'=>'Successfully updated',
             'image_path'=>$fileName
         ];

	}


    public function PAds(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'photo_2' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'success' => false,
                    'error' =>  $validator->errors()->first()
                ]);
        }

        $fileName='';
        if(isset($_POST["photo_2"])!==false) {
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');

                $fileName = "ads_" . rand(00000,99999) . "." . $photo->getClientOriginalExtension();
                //$fileName = "ads_" . time() . "." . $photo->getClientOriginalExtension();
                $request->file('photo')->move(public_path('user-photos/' . $_POST["photo_2"]), $fileName);
            }else{
                return [
                    'success'=>true,
                    'message'=>'Successfully updated',
                    'image_path'=>$_POST["photo_2"]
                ];
            }
        }

        return [
            'success'=>true,
            'message'=>'Successfully updated',
            'image_path'=>$fileName
        ];

    }

    public function PBrand(Request $request)
	 {

         $validator = Validator::make($request->all(), [
             'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            // 'onvan' => 'max:2000'
         ]);

         if ($validator->fails()) {
             return response()
                 ->json([
                     'success' => false,
                     'error' =>  $validator->errors()->first()
                 ]);
         }
         $fileName='';
         if ($request->hasFile('photo')) {
             $photo = $request->file('photo');

             $fileName = "bnd_" . time() . "." . $photo->getClientOriginalExtension();
             $request->file('photo')->move(public_path('user-photos'), $fileName);


         }

         return [
             'success'=>true,
             'message'=>'Successfully updated',
             'image_path'=>$fileName
         ];

	}

    public function PCat(Request $request)
	 {

         $validator = Validator::make($request->all(), [
             'photo' => 'required|image|mimes:png,jpg,jpeg|max:2000',
             //'onvan' => 'max:2000'
         ]);

         if ($validator->fails()) {
             return response()
                 ->json([
                     'success' => false,
                     'error' =>  $validator->errors()->first()
                 ]);
         }
         $fileName='';
         if ($request->hasFile('photo')) {
             $photo = $request->file('photo');

             $fileName = "cat_" . time() . "." . $photo->getClientOriginalExtension();
             $request->file('photo')->move(public_path('user-photos'), $fileName);


         }

         return [
             'success'=>true,
             'message'=>'Successfully updated',
             'image_path'=>$fileName
         ];

	}

    public function search(Request $request)
    {
        if(PHP_SESSION_NONE==session_status())session_start();

        isset($_SESSION["listesh"])!==false?$ss=count($_SESSION["listesh"]):$ss=0;

        if(isset($_POST['ad_search_query'])!==false){
            $q= trim($_POST['ad_search_query']);
            $ads=Ad::where('title',"LIKE","%$q%")
                ->orWhere("text_content","LIKE","%$q%")
                ->get();
            foreach($ads->toArray() as $kiz=>$io){
                $ads[$kiz]=Ad::find($io["id"]);
            }
            $cas=Cats::all()->toArray();
            $ciz=City::all()->toArray();

        }else{
            $ads=Ad::all()->toArray();
            $cas=Cats::all()->toArray();
            $ciz=City::all()->toArray();
        }

        return view('prudoct',['ads'=>$ads,'cat'=>$cas,'cit'=>$ciz,'result'=>false,"dum"=>$ss]);


    }

    public function search_sug(Request $request)
    {
        $q= $request->sug;
		$silver = DB::table("ad")
    ->select("ad.title"
      ,"ad.text_content")->where("title","LIKE","$q%")
            ->orWhere("text_content","LIKE","$q%");

			$ads=Ad::where("title","LIKE","%$q%")
            ->orWhere("text_content","LIKE","%$q%")
			->union($silver)
            ->orderBy('id','DESC')
            ->limit(5)
            ->get(['title','id']);

       return response()->json($ads);


    }

}
