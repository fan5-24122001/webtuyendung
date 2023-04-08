<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\categoryModel;
use Illuminate\Http\Request;
use App\Http\Requests\Post\create;
use App\Models\Love;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // nhà tuyển dụng//
    public function add()
    {
        $category = categoryModel::all();
        return view('layouts.pages.userpost.post.addPost', compact('category'));
    }
    //thêm//

    public function postadd(Request $request)
    {

        if (Post::create([
            'id_user' => Auth::user()->id,
            'name' => $request->name,
            'numberPhone' => $request->numberPhone,
            'address' => $request->address,
            'location' => implode(',', $request->location),
            'amount' => $request->amount,
            'email' => $request->email,
            'type' => implode(',', $request->type),
            'skill' => implode(',', $request->skill),
            'status' => 0, //0 create, 1 accept 
            'minMoney' => $request->minMoney,
            'maxMoney' => $request->maxMoney,
            'title' => $request->title,
            'timeEnd' => $request->timeEnd,
            'content' => $request->content,
            'views' => '0',

        ])) {
            return redirect()->route('PostList')->with('success', 'Thêm thành công.');
        }
    }



    //sửa bài //
    public function edit(Post $id)
    {
        $category = categoryModel::all();

        return view('layouts.pages.userpost.post.editPost', compact(['id', 'category']));
    }
    public function postedit(Request $request)
    {

        $posts = new Post;
        $post = $posts->find($request->id);
        $post->name = $request->name;
        $post->email = $request->email;
        $post->amount = $request->amount;
        $post->numberPhone = $request->numberPhone;
        $post->address = $request->address;
        $post->location = implode(',', $request->location);
        $post->skill = implode(',', $request->skill);

        $post->type = implode(',', $request->type);
        $post->minMoney = $request->minMoney;
        $post->maxMoney = $request->maxMoney;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->timeEnd = $request->timeEnd;
       
        $post->save();
        return redirect()->route('PostList')->with('success', 'Sửa thành công.');
    }
    //sửa bài //



    //xóa bài//

    public function delete($id)
    {
        Post::find($id)->delete();

        return redirect()->route('PostList')->with('success', 'Xóa thành công.');
    }
    ///xóa bài//


    //danh sách bài đăng //
    public function list()
    {
        $id_user = Auth::user()->id;
        $data = Post::where('id_user', '=', $id_user)->get();
        return view('layouts.pages.userpost.post.listPost', compact('data'));
    }
    //danh sách bài đăng //
    //sorta-Z//
    public function sortaz()
    {
        $category = categoryModel::all();
        $data = Post::orderBy('minMoney', 'desc')->get();
        return view('layouts.pages.userapply.sort.a-Z', compact('data', 'category'));
    }
    //sorta-Z//
     //sorta-Z//
     public function sortaz1()
     {
         $category = categoryModel::all();
         $data = Post::orderBy('minMoney', 'ASC')->get();
         return view('layouts.pages.userapply.sort.price', compact('data', 'category'));
     }
     //sorta-Z//
    // kết thúc nhà tuyển dụng//

    //hiển thị các post đăng lên trang home//
    public function showListPost()
    {
        $category = categoryModel::all();
       
        $data = DB::table('post')->paginate(5);
        

        return view('layouts.pages.List', compact('data', 'category',));
    }

    //hiển thị các post đăng lên trang home//


    public function search(Request $request)
    {
        $category = categoryModel::all();
        $location = $request->location;
        $type = $request->type;
        $skill = $request->skill;
        $skill = $request->skill;

        $data = Post::where('skill', 'like', '%' . $skill . '%')->where('location', 'like', '%' . $location . '%')->where('type', 'like', '%' . $type . '%')->orderby('minMoney')->paginate(5);;


        return view('layouts.pages.List', compact('data', 'category'));
    }


    //hiển thị thoong tin bài post đăng lên trang home//


    public function viewPost($id)
    {
        $data =  Post::find($id)->increment('views');
        $id = Post::find($id);

        return view('layouts.pages.viewPost', compact('id'));
    }








    //yêu thích sản phẩm//
    public function addlove1($post_id)
    {
        $user_id = Auth::user()->id;
      
            if (Love::create([
                'post_id' => $post_id,
                'user_id' => $user_id,
            ])) {
                return redirect()->route('listlove')->with('success', 'Thêm thành công.');
            }
       
        
    }
    public function listlove()
    {
        $id_user = Auth::user()->id;
        $data = Love::where('user_id', '=', $id_user)->get();
        $post = Post::all();
        return view('layouts.pages.userapply.love.list', compact(['data', 'post']));
    }
    public function deletelove($id)
    {
        Love::find($id)->delete();

        return redirect()->back()->with('success', 'Xóa thành công.');
    }
    // kêt thúc yêu thích sản phẩm//
}
