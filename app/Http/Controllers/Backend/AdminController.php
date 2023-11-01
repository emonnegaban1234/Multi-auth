<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    function adminloginForm(){
        return view('backend.admin.admin_login');
    }

    function adminlogin(Request $request){
        $request->validate([
        'email'=>'required',
        'password'=>'required',

        ]);

      if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
      {
     
        return redirect()->route('xxxxxxxxxxxxx');
      }
     
      else{
        Session::flash('error-mesg','Email does not exist');
        return redirect()->back();
      }       
}

  function adminlogout(){
    Auth::guard('admin')->logout();
    return redirect('login/admin');
  }

}