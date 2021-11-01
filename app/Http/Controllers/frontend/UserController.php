<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Image;


class UserController extends Controller
{
    public function UserRegistration(){
        return view('frontEnd.usersMaintain.user_reg');
    }

    public function NewUserRegistration(Request $request){
        $validatedData= $request->validate([

            'email'=>'required|unique:users',
            'name'=>'required',
            'password'=>'required',
        ]);

        if($request->password==$request->password_confirmation){

            $data = new User();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->role = "user";
            $data->save();
    
            $notification= array(
                'message' =>'User Inserted successfully',
                'alert-type'=>'success'
            );
           
            return Redirect()->route('dashboard')->with($notification);
        }
        else{
            $notification= array(
                'message' =>'Passowrd Not Matched',
                'alert-type'=>'error'
            );
           
            return view('frontEnd.usersMaintain.user_reg')->with($notification);
        }
       
    }
}
