<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminDeshboardController extends Controller
{
    //
    public function deshboardView(){

        if(Auth::user()->role=='admin'){

            return view('admin.index');
        }
        else
        {
            return redirect()->route('/');
        }
        
    }
}
