<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Partner;
use App\Models\Profile;
use App\Models\Slideshow;
use App\Models\Quotes;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {

    // dd(Profile::select('slug')->get());

    // $slug = Profile::all();
    $slug = Profile::select('slug', 'title')->get();
    // Session::put('sidebar',$slug);
    session(['sidebar' => $slug]);
    return view('page.homeContent', [
      'slide' => Slideshow::all(),
      'quotes' => Quotes::all(),
      'clients' => Client::all(),
      'partners' => Partner::all(),
    ]);
  }

  public function page($slug)
  {
    // dd(Profile::firstWhere('slug',$slug));
    return view('page.pageContent', [
      'linkSidebar' => Profile::all(),
      'data' => Profile::firstWhere('slug', $slug),
    ]);
  }

  public function lang_change(Request $request)
  {
    App::setLocale($request->lang);
    session()->put('locale', $request->lang);
    return redirect()->back();
  }
}
