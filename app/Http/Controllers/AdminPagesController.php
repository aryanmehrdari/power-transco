<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Cat;
use App\Models\City;
use Illuminate\Http\Request;


class AdminPagesController extends Controller
{


    public function create_city(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255'
        ]);


        $result = false;

        $title = $request->title;


        $ad = new City();
        $ad->title = $title;
        $ad->save();

        if ($ad) {
            $result = true;
        }

        return json_encode($result);


    }


    public function create_cat(Request $request)
    {


        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:255|unique:cat'

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }


        $result = false;

        $title = $request->title;


        $ad = new Cat();
        $ad->title = $title;
        $ad->save();

        if ($ad) {
            $result = true;
        }


        return response()->json($result);


    }


    public function edit_cat(Request $request)
    {


        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:255|unique:cat'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }


        $result = false;

        $title = $request->title;


        $cat = Cat::find($request->edit_id);
        $cat->title = $title;
        $cat->save();

        if ($cat) {
            $result = true;
        }


        return response()->json($result);


    }


    public function admin_cat_form()
    {

        $cat = Cat::all();

        return view("admin-cat", [
            "cats" => $cat
        ]);

    }


    public function edit_cat_form(Request $request)
    {

        $cat_id = $request->id;

        $cat = Cat::find($cat_id);

        return view("admin-edit-cat", [
            "cat" => $cat
        ]);


    }


    public function delete_cat(Request $request)
    {

        $result = false;

        $cat = Cat::find($request->id)->delete();


        if ($cat) {
            $result = true;
        }


        return response()->json($result);
    }

    public function soft_delete_cat(Request $request)
    {

        $result = false;

        $cat = Cat::find($request->id);

        if($request->delete_or_not==1){
            $cat->is_deleted=1;
        }else{
            $cat->is_deleted=0;
        }


        $cat->save();



        if ($cat) {
            $result = true;
        }


        return response()->json($result);
    }


}
