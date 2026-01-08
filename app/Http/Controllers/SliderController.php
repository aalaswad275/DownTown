<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Slider;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /*
        يتم ارسال جميع البيانات الخاصة بالصور المتحركة
        */
        $slider=Slider::All();
        return view('admin.Slider.index',compact('slider'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.Slider.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datavaldite= $request->validate([
            "slider_title"=>'nullable|string|max:255',
            "image_subtitle"=>'nullable|string|max:255',
            "image_disc"=> 'nullable|string',
            "image_link"=>'nullable|string',
             "is_active"=>'nullable',
             "slider_image"=>'required|max:5120',

        ]);


        $imageslider=null;
        if($request->hasFile('slider_image')&& $request->file('slider_image')->isValid()){
            $file=$request->file('slider_image');
            // تغير اسم صورة
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img'),$filename);
            $imageslider=$filename;

        }
        $slider= new Slider();

        // mysql         =     من النموذج
        $slider->title= $request->slider_title;
        $slider->subtitle= $request->image_subtitle;
        $slider->description= $request->image_disc;
        $slider->link=$request->image_link;
        $slider->active=1;
        $slider->user_id=1;
        $slider->image=$imageslider;
        $slider->save();
        return redirect()->route('sliders.index');


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $slider= Slider::find($id);
        return view('admin.Slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $slider=Slider::find($id);
        return view('admin.Slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datavaldite=$request->validate([
            "slider_title"=>'nullable|string|max:255',
            "image_subtitle"=>'nullable|string|max:255',
            "image_disc"=> 'nullable|string',
            "image_link"=>'nullable|string',
             "is_active"=>'nullable',
             "slider_image"=>'required|max:5120',

        ]);
        $slider=Slider::find($id);
        $imageslider=$slider->image;
        if($request->hasFile('slider_image') && $request->file('slider_image')->isValid())
        {
            $file=$request->file('slider_image');
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img/'),$filename);
            $imageslider=$filename;

            $oldpath=public_path('frontend/img'.$slider->image);
            if($slider->image && File::exists($oldpath))
            {
                file:delete($oldpath);
            }
        }
        // mysql         =     من النموذج
        $slider->title= $request->slider_title;
        $slider->subtitle= $request->image_subtitle;
        $slider->description= $request->image_disc;
        $slider->link=$request->image_link;
        $slider->active=1;
        $slider->user_id=1;
        $slider->image=$imageslider;
        $slider->save();
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $slider= Slider::find($id);
        $oldpath=public_path('/frontend/img/'.$slider->image);
        if($slider->image &&  File::exists($oldpath)){
            File::delete($oldpath);
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('success',"تم الحذف بنجاح ");
    }
}
