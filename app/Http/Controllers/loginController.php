<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class loginController extends BaseController
{
    function getIndex() {

        return view('login');
 //       if (Auth::check()) return redirect('admin/index');
  //      else return view('login');
    }
}
