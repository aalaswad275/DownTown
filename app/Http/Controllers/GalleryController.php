<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Gallery;
use App\Models\Landmark;
use App\Models\Category;
use App\Models\Store;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gallery = Gallery::latest()->paginate(10);
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $stores = Store::all();
        $landmarks = Landmark::all();
        $categories = Category::all();

        return view('admin.gallery.create',compact('stores','landmarks','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $datavaldite= $request->validate([
            "image_title"=>'nullable|string|max:255',
            "image_disc"=> 'nullable|string',
             "gallery_image"=>'required|max:5120',

        ]);


        $image_gallery=null;
        if($request->hasFile('gallery_image')&& $request->file('gallery_image')->isValid()){
            $file=$request->file('gallery_image');
            // تغير اسم صورة
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img'),$filename);
            $image_gallery=$filename;

        }
        $image= new Gallery();

        // mysql         =     من النموذج
        $image->title= $request->image_title;

        $image->description= $request->image_disc;
        $image->landmark_id=$request->landmark_id;
        $image->store_id= $request->store_id;
        $image->user_id=1;
        $image->image=$image_gallery;
        $image->save();
        return redirect()->route('gallery.index')->with('success','تمت اضافة الصورة بنجاح') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $gallery= Gallery::find($id);
        return view('admin.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $image= Gallery::find($id);
        $stores = Store::all();
        $landmarks = Landmark::all();
        $categories = Category::all();
        return view('admin.gallery.edit',compact('image','stores','landmarks','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datavaldite= $request->validate([
            "image_title"=>'nullable|string|max:255',
            "image_disc"=> 'nullable|string',
             "gallery_image"=>'required|max:5120',

        ]);
        $image= Gallery::find($id);

        $image_gallery=$image->image;
        if($request->hasFile('gallery_image')&& $request->file('gallery_image')->isValid()){
            $file=$request->file('gallery_image');
            // تغير اسم صورة
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img'),$filename);
            $image_gallery=$filename;

            $oldpath=public_path('frontend/img'.$image->image);
            if($image->image && File::exists($oldpath))
            {
                file:delete($oldpath);
            }

        }


        // mysql         =     من النموذج
        $image->title= $request->image_title;

        $image->description= $request->image_disc;
        $image->landmark_id=$request->landmark_id;
        $image->store_id= $request->store_id;
        $image->user_id=1;
        $image->image=$image_gallery;
        $image->save();
        return redirect()->route('gallery.index')->with('success','تمت اضافة الصورة بنجاح') ;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $image= Gallery::find($id);
        $oldpath=public_path('frontend/img'.$image->image);
        if($image->image && File::exists($oldpath))
        {
            file:delete($oldpath);
        }
        $image->delete();
        return redirect()->route('gallery.index')->with('success','تمت حذف الصورة بنجاح') ;
    }
}
