<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //admin
use Illuminate\Support\Facades\File; // تحميل صور

use App\Models\Landmark;

class LandMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $landmarks= Landmark::All();;
        return view('admin.landmarks.index',compact('landmarks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.landmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datavaldation = $request->validate([
            "name"=>"required|max:255",
            "description"=> "nullable",
            "image"=>"nullable|required",
            //مصفوفة من صور
            "gallery.*"=>"image",
            "tags"=> "nullable",
             "phone"=>"nullable",
             "longitude"=>"nullable",
             "latitude"=>"nullable",
        ]);
        $imagepath=null;
        if($request->hasFile('image')&& $request->file('image')->isValid()){
            $file=$request->file('image');
            // تغير اسم صورة
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img/landmarks'),$filename);
            $imagepath=$filename;
        }
        $gallery=[];
        if($request->hasFile('gallery')){
            foreach($request->file('gallery') as $galleryfile){
                $file=$request->file($galleryfile);
                $filename= time().'_'.$file->getClientOriginalName();
                $gallery[]=$file->move(public_path('frontend/img/landmarks/gallery'),$filename);
            }
        }
        // ? هي عبارة عن if
        $tags= $request->tags ? explode(',',str_replace(' ','', $request->tags)):null;
        $openingHours= $request->opening_hours ?? null;

        $landmark =new Landmark();
        $landmark->name = $request->name;
        $landmark->description = $request->description;
        $landmark->slug = Str::slug($request->name).'-'.uniqid();
        $landmark->image = $imagepath;
        $landmark->gallery = $gallery;
        $landmark->address = $request->address;
        $landmark->city_id = $request->city;
        $landmark->latitude= $request->latitude;
        $landmark->longtude= $request->longtude;
        $landmark->category= $request->category;
        $landmark->tags= $tags;
        $landmark->website= $request->website;
        $landmark->phone= $request->phone;
        $landmark->opening_hours= $openingHours;
        $landmark->rating= $request->ratings ?? 0;
        $landmark->views= 0;
        $landmark->active= $request->has('active');
        $landmark->save();
        return redirect()->action('landmark.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
