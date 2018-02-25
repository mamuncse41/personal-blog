<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
      public function index(){
         $admin_id=Session::get('admin_id');
        if($admin_id !=NULL){
            return Redirect::to('/dashboard')->send();
        }
        return view('Admin.login.login');
    }
 

    public function login(Request $request){
          $email_address=$request->email;
          $password=$request->password;
          $result=DB::table('admin_signup')
                  ->where('admin_email',$email_address)
                  ->where('admin_password',md5($password))
                  ->first();
          if($result){
              $admin_name=$result->admin_name;
              $admin_id=$result->admin_id;
              Session::put('admin_name',$admin_name);
              Session::put('admin_id',$admin_id);
             return Redirect::to('/dashboard');
          }else{
              Session::put('exception','Your email OR password is invalid!!');
              return redirect::to('/admin_login');
          }
      
     
    }
      public function signup(){
        return view('Admin.signup.signup');
    }
  
}
