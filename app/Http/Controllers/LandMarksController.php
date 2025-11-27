<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //admin
use Illuminate\Support\Facades\File; // تحميل صور
use Illuminate\Support\Str;
use App\Models\Landmark;
use App\Models\City;
use App\Models\Category;

class LandMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $landmarks= Landmark::All();
        $cities = City::All();
        $catgories= Category::All();
        return view('admin.landmarks.index',compact('landmarks','cities','catgories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cities = City::All();
        $catgories= Category::All();
        return view('admin.landmarks.create',compact('cities','catgories'));
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
        $gallery = [];

if ($request->hasFile('gallery')) {

    foreach ($request->file('gallery') as $galleryfile) {  // $galleryfile is the file!

        if ($galleryfile->isValid()) { // ✅ Correct

            $filename = time() . '_' . $galleryfile->getClientOriginalName();

            $galleryfile->move(
                public_path('frontend/img/landmarks/gallery'),
                $filename
            );

            $gallery[] = 'frontend/img/landmarks/gallery/' . $filename;
        }
    }
}


        // ? هي عبارة عن if
        $tags = $request->tags
            ? explode(',', str_replace(' ', '', $request->tags))
            : [];
        $openingHours= $request->opening_hours ?? null;

        $landmark =new Landmark();
        $landmark->name = $request->name;
        $landmark->description = $request->description;
        $landmark->slug = Str::slug($request->name).'-'.uniqid();
        $landmark->image = $imagepath;
        $landmark->gallery = $gallery;
        $landmark->address = $request->address;
        $landmark->city_id = 10;
        $landmark->latitude= $request->latitude;
        $landmark->longtude= $request->longitude;
        $landmark->category= $request->category;
        $landmark->tags= $tags;
        $landmark->website= $request->website;
        $landmark->phone= $request->phone;
        $landmark->opening_hours= $openingHours;
        $landmark->ratings= $request->ratings ?? 0;
        $landmark->views= 0;
        $landmark->active= $request->has('active');
        $landmark->save();
        return redirect()->route('landmarks.create')->with('success', 'Landmark created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $landmarks= Landmark::find($id);
        $cities = City::All();
        $catgories= Category::All();
        return view('admin.landmarks.show',compact('landmarks','cities','catgories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $landmarks= Landmark::find($id);
        $cities = City::All();
        $catgories= Category::All();
        return view('admin.landmarks.edit',compact('landmarks','cities','catgories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    $landmark = Landmark::findOrFail($id);

    // -----------------------
    // VALIDATION
    // -----------------------
    $request->validate([
        "name"        => "required|max:255",
        "description" => "nullable",
        "image"       => "nullable|image",
        "gallery.*"   => "image|mimes:jpg,jpeg,png,webp",
        "tags"        => "nullable|string",
        "phone"       => "nullable",
        "longitude"   => "nullable",
        "latitude"    => "nullable",
    ]);


    // -------------------------------------
    // UPDATE MAIN IMAGE (optional)
    // -------------------------------------
    $imagepath = $landmark->image;

    if ($request->hasFile('image') && $request->file('image')->isValid()) {

        // delete old
        if ($landmark->image && file_exists(public_path($landmark->image))) {
            unlink(public_path($landmark->image));
        }

        $file = $request->file('image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('frontend/img/landmarks'), $filename);

        $imagepath = 'frontend/img/landmarks/' . $filename;
    }


    // -------------------------------------
    // UPDATE GALLERY (merge new + existing)
    // -------------------------------------
    $gallery = $landmark->gallery ?? []; // old gallery images

    if ($request->hasFile('gallery')) {

        foreach ($request->file('gallery') as $galleryfile) {

            if ($galleryfile->isValid()) {

                $filename = time() . '_' . $galleryfile->getClientOriginalName();
                $galleryfile->move(
                    public_path('frontend/img/landmarks/gallery'),
                    $filename
                );

                $gallery[] = 'frontend/img/landmarks/gallery/' . $filename;
            }
        }
    }

    // delete specific gallery image
    if ($request->filled('delete_gallery')) {

        foreach ($request->delete_gallery as $deletePath) {

            // remove file from disk
            if (file_exists(public_path($deletePath))) {
                unlink(public_path($deletePath));
            }

            // remove from array
            $gallery = array_values(array_diff($gallery, [$deletePath]));
        }
    }


    // -------------------------------------
    // TAGS (string → array)
    // -------------------------------------
    $tags = $request->tags
            ? explode(',', str_replace(' ', '', $request->tags))
            : [];


    // -------------------------------------
    // UPDATE LANDMARK
    // -------------------------------------
    $landmark->name          = $request->name;
    $landmark->description   = $request->description;
    $landmark->slug          = Str::slug($request->name) . '-' . uniqid();
    $landmark->image         = $imagepath;
    $landmark->gallery       = $gallery;
    $landmark->address       = $request->address;
    $landmark->city_id       = $request->city_id;
    $landmark->latitude      = $request->latitude;
    $landmark->longtude     = $request->longitude;
    $landmark->category      = $request->category;
    $landmark->tags          = $tags;
    $landmark->website       = $request->website;
    $landmark->phone         = $request->phone;
    $landmark->opening_hours = $request->opening_hours;
    $landmark->ratings        = $request->ratings ?? $landmark->ratings;
    $landmark->active     = $request->boolean('active', $landmark->active);

    $landmark->save();

    return redirect()->route('landmarks.index')
        ->with('success', 'Landmark updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    $landmark = Landmark::findOrFail($id);

    /*------------------------------------------
    | Delete MAIN image if exists
    ------------------------------------------*/
    if ($landmark->image && file_exists(public_path('frontend/img/landmarks/' . $landmark->image))) {
        unlink(public_path('frontend/img/landmarks/' . $landmark->image));
    }

    /*------------------------------------------
    | Delete GALLERY images if exists
    ------------------------------------------*/
    if (is_array($landmark->gallery)) {
        foreach ($landmark->gallery as $img) {
            $path = public_path($img);

            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    /*------------------------------------------
    | Delete database record
    ------------------------------------------*/
    $landmark->delete();

    return redirect()->route('landmarks.index')
        ->with('success', 'Landmark deleted successfully');


    }
}
