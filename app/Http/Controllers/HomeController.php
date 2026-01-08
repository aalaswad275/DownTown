<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landmark;
use App\Models\City;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Store;
use App\Models\Comments;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin) {
            return redirect()->route('dashboard');
        }
        return view('welcome');
    }
    public function dashboard()
    {

        $landmarks = Landmark::all();
        $cities = City::all();
        $categories = Category::all();
        $sliders = Slider::all();
        $galleries = Gallery::all();
        $stores = Store::all();
        $comments = Comments::all();
        $users = User::all();


        return view('admin.dashboard', compact('landmarks', 'cities', 'categories', 'sliders', 'galleries', 'stores', 'comments', 'users'  ));
    }

}
