<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     
    public function demo()
    {
        echo "hello";
        if (Auth::guard('admin')->check()) {
           echo "its admin";
          }
          if (Auth::guard('superadmin')->check()) {
            echo "its superadmin";
           }
    }
}
