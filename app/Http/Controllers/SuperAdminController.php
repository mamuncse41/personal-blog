<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller
{
      public function dashboard() {
          $this->admin_auth();
        return view('Admin.index');
    }
    public function admin_auth(){
        $admin_id=Session::get('admin_id');
        if($admin_id== NULL){
            return Redirect::to('/admin_login')->send();
        }
    }

    public function logout(){
        Session::put('admin_id','');
        Session::put('admin_name','');
        Session::put('message','Successfully logout!!');
        return Redirect::to('/admin_login');
    }


}
