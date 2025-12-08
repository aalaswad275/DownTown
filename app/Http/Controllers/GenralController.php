<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Landmarks;
use App\Models\Store;
use Illuminate\Http\Request;

class GenralController extends Controller
{
    //
    public function Slider(){
        $slider = Slider::Where('active','1')->get();
        $count=0;
        return view('welcome',compact('slider','count'));

    }
   public function about(){
    return view('main.about');
   }

   public function contact(){
    return view('main.contact');
   }
   public function gallery(){
    $gallery = Gallery::Where('active','1')->get();
    return view('main.gallery',compact('gallery'));
   }

   public function service(){
    return view('main.service');
   }
   public function store(){
    $store = Store::Where('active','1')->get();
    return view('main.store',compact('store'));
   }

    public function landmarks(){
     $landmarks = Landmarks::Where('active','1')->get();
     return view('main.destinstion',compact('landmarks'));
    }

}
