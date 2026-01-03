<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stores=Store::latest()->paginate(20);
        return view('admin.Store.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.Store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'store_name'=>'required|string|max:255',
            'store_disc'=>'required|string|max:255',
            'store_address'=>'required|string|max:255',
            'store_phone'=>'required|string|max:255',
            'store_email'=>'required|string|max:255',
            'store_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'store_longitude'=>'nullable|string|max:255',
            'store_latitude'=>'nullable|string|max:255',
            'store_type'=>'nullable|integer',
        ]);

         $imageslider=null;
        if($request->hasFile('store_image')&& $request->file('store_image')->isValid()){
            $file=$request->file('store_image');
            // تغير اسم صورة
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img'),$filename);
            $imageslider=$filename;

        }
        $store= new Store();
        $store->name=$request->store_name;
        $store->description=$request->store_disc;
        $store->address=$request->store_address;
        $store->phone=$request->store_phone;
        $store->email=$request->store_email;
        $store->user_id=Auth::user()->id;
        $store->image=$imageslider;
        $store->save();
        return redirect()->route('stores.index')->with('success','تمت اضافة المتجر بنجاح') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $store=Store::find($id);

        return view('admin.Store.show',compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $store=Store::find($id);
        return view('admin.Store.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'store_name'=>'required|string|max:255',
            'store_disc'=>'required|string|max:255',
            'store_address'=>'required|string|max:255',
            'store_phone'=>'required|string|max:255',
            'store_email'=>'required|string|max:255',
            'store_image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'store_longitude'=>'nullable|string|max:255',
            'store_latitude'=>'nullable|string|max:255',
            'store_type'=>'nullable|integer',
        ]);
        $store=Store::find($id);
         $imageslider=$store->image;
        if($request->hasFile('store_image')&& $request->file('store_image')->isValid()){
            $file=$request->file('store_image');
            // تغير اسم صورة
            $filename=time().'-'.$file->getClientOriginalName();
            $file->move(public_path('frontend/img'),$filename);
            $imageslider=$filename;

            $oldpath=public_path('frontend/img').'/'.$store->image;
            if(file_exists($oldpath)){
                unlink($oldpath);
            }

        }

        $store->name=$request->store;
        $store->description=$request->store_disc;
        $store->address=$request->store_address;
        $store->phone=$request->store_phone;
        $store->email=$request->store_email;
        $store->user_id=1;//::user()->id;
        $store->image=$imageslider;
        $store->save();
        return redirect()->route('store.index')->with('success','تمت اضافة المتجر بنجاح') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $store=Store::find($id);
        $oldpath=public_path('frontend/img').'/'.$store->image;
        if(file_exists($oldpath)){
            unlink($oldpath);
        }
        $store->delete();
        return redirect()->route('store.index')->with('success','تم حذف المتجر بنجاح') ;

    }
}
