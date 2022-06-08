<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use DataTables;
use Mail;

class PublicController extends Controller
{
 
    public function getHome(){
        return view('auth.login');
    }

    public function getRegister(){
            return view('register');
    }

    public function postRegister(Request $request){

        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $address = $request->address;
        $city = $request->city;
        $password = Hash::make($request->password);
        $confirm_password = Hash::make($request->confirm_password);

        $data = new User();
        $data->name = $name;
        $data->email = $email;
        $data->contact = $contact;
        $data->city = $city;
        if($request->hasFile('profile_image')){
            $image = $request->profile_image;
            $path = $image->store('profile_image');
            $data->profile_image=$path;
        }
        $data->address = $address;
        $data->password = $password;
        $data->confirm_password = $confirm_password;
        $data->save();

        return redirect('login');
    }

    public function getAlluser(){
        if(Auth::user()->role==1){
            return view('user.all');
        }else{
            return view('auth.login');
        }
    }

    public function getAlluserData(){     
        $user = User::where('role',2)->get();
        return DataTables::of($user)->make(true);
    }

    public function getEditUser($user_id){
        $user = User::find($user_id);
        return view('user.edit')->with('user', $user);
    }

    public function postEditUser(Request $request){
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->city = $request->city;
        if($request->hasFile('profile_image')){
            $image = $request->profile_image;
            $path = $image->store('profile_image');
            $user->profile_image=$path;
        }
        $user->address = $request->address;
        $user->save();
        return redirect('user/all')->with('success','Updated Successfully');
    }

    public function getDelete(Request $request,$user_id) {
        $user = User::find($request->user_id);
        $user->delete();
        return redirect('user/all');
    }

}








