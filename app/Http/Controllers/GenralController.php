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
         $tripolilandmark = Landmark::Where('city_id','63')->get();
         $Gihdamaslandmark = Landmark::Where('city_id','76')->get();
         $Sabrathalandmark=Landmark::Where('city_id','69')->get();
         $Benghazilandmark=Landmark::Where('city_id','1')->get();
         $Ghaatlandmark=Landmark::Where('city_id','87')->get();
        $stores = Store::all();
        $galleries = Gallery::Where('active','1')->get();
        $count=0;
        return view('welcome',compact('slider','Ghaatlandmark','Benghazilandmark','Sabrathalandmark','Gihdamaslandmark','count','mainlandmark','stores','galleries','tripolilandmark'));

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
        $landmark->views=$landmark->views+1;
        $landmark->save();
        return view('main.placephotos',compact('landmark'));
       }
       public function Info($id){
        $landmark = Landmark::findOrFail($id);
        $landmark->views=$landmark->views+1;
        $landmark->save();
        return view('main.placeinfo',compact('landmark'));
       }
       public function landmark(){
        $landmarks = Landmark::Where('active','1')->get();

        return view('main.landmark',compact('landmarks'));
       }

}
