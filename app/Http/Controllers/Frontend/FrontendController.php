<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $featured_products = Product::where('trending', '1')->orderBy('created_at', 'DESC')->take(16)->get();
        $featured_banner = Banner::where('tranding','1')->take(3)->get();

        return view('frontend.index', compact('featured_products','featured_banner'));
    }
    protected function adminpanel()
    {
        if(Auth::user()) //1 = Admin Login
        {
            return view('admin.index');
        }
        elseif(!Auth::user()) // Normal or Default User Login
        {
            return redirect('login')->with('status','Logged in successfully');
        }
    }

}
