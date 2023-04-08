<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $posts = Post::all();
        $date = date("Y-m-d");
        // dd($date);
        foreach ($posts as $key => $value) {
            if($value->timeEnd == $date){
                // dd($key);
                $value->delete();
            }
        }
        //TRANGCHUHOME//
         $category = categoryModel::all();
         $data = Post::paginate(5);
        return view('layouts.pages.home', compact('data','category'));
    }
   
  
}
