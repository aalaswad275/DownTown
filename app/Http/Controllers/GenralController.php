<?php

namespace App\Http\Controllers;
use App\Models\Slider;

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
    return view('main.gallery');
   }

   public function service(){
    return view('main.service');
   }

}
