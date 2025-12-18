<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Landmark;
use App\Models\Store;
use Illuminate\Http\Request;

class GenralController extends Controller
{
    //
    public function Slider(){
        $slider = Slider::Where('active','1')->get();
        $mainlandmark = Landmark::Where('main','1')->get();
        $stores = Store::all();
        $galleries = Gallery::Where('active','1')->get();
        $count=0;
        return view('welcome',compact('slider','count','mainlandmark','stores','galleries'));

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
    return view('main.services');
   }
   public function store(){
    $store = Store::Where('active','1')->get();
    return view('main.store',compact('store'));
   }

    public function landmarks(){
     $landmarks = Landmarks::Where('active','1')->get();
     return view('main.destinstion',compact('landmarks'));
    }
    public function Photos($id){
        $landmark = Landmark::findOrFail($id);
        return view('main.placephotos',compact('landmark'));
       }
       public function Info($id){
        $landmark = Landmark::findOrFail($id);
        return view('main.placeinfo',compact('landmark'));
       }
       public function landmark(){
        $landmark = Landmark::Where('active','1')->get();
        return view('main.landmark',compact('landmark'));
       }

}
