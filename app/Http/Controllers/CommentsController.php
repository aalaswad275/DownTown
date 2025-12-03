<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Comments;
use App\Models\Landmark;
use App\Models\Store;
use App\Models\Gallery;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comments=Comment::latest()->paginate(10)  ;
        return view('backend.comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "comment"=>'required|string|max:255',
            "landmark_id"=>'nullable|integer',
            "store_id"=>'nullable|integer',
            "gallery_id"=>'nullable|integer',
            "rating"=>'nullable|integer',
        ]);
        $comment=new Comment();
        $comment->comment=$request->comment;
        $comment->landmark_id=$request->landmark_id;
        $comment->store_id=$request->store_id;
        $comment->gallery_id=$request->gallery_id;
        $comment->rating=$request->rating;
        $comment->user_id=1; //Auth::id();
        $comment->save();
        return redirect()->back()->with('success','تمت اضافة التعليق بنجاح') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $comment=Comments::find($id);
        return view('backend.comments.show',compact('comment'));
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

        $comment= Comments::find($id);
        $comment->delete();
        return redirect()->route('comments.index')->with('success','تمت حذف التعليق بنجاح') ;
    }
}
