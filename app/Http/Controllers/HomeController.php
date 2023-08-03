<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function index()  {
        return view('website.home.index',[
            'brands'=> Brand::all(),
            'products'=> Product:: all(),
            'newcars'=>Product::where('status',1)->orderBy('id','desc')->get(),
            'sliders'=>Product::where('status',1)->orderBy('id','desc')->get()->take(4),
            'reconditioncars'=>Product::where('status',0)->orderBy('id','desc')->get()
        ]);
    }
    public function shop($name){
        return view('website.brand.index',[
            'datas'=>Product::where('brand_name',$name)->orderBy('id','desc')->get()
        ]);
    }
    public function details($slug)  {
        return view('website.details.index',[
            'details'=>Product::where('slug',$slug)->orderBy('id')->first()
        ]);
    }

}
