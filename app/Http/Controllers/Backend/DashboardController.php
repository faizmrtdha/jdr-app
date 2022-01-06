<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
// use App\Http\Controllers\Backend\Controller;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Quotes;
use App\Models\Slideshow;

class DashboardController extends Controller
{

  public function index()
  {
    // if(RoleAuthoration('um-view'))
    // {
    //   dd('oke');
    // } else {
    //   dd('noy');
    // }


    // dd(RoleAuthoration('cm-view'));
    return view('dashboard.index');
  }
  public function home()
  {
    return view('dashboard.conten_management.Home.index', [
      'slide' => Slideshow::all(),
      'quote' => Quotes::all(),
      'client' => Client::all(),
      'partner' => Partner::all(),
    ]);
  }
  // public function role()
  // {
  //     return view('dashboard.role_management.index');
  // }
  // public function userManagement()
  // {
  //     return view('dashboard.user_management.index');
  // }

}
