<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Facade\FlareClient\View;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //hiển thị//
    public function index()
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }
    //hiển thị//
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //hiển thị show bài//
    public function show($id)
    {
        $post = Post::find($id);
        Event::fire('posts.view', $post);

        return view('admin.post.show', compact('post'));
    }
    //hiển thị show bài//
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //sửa bài//
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->status = $request['status'];
        $post->save();
        return redirect()->back()->with('massage', 'Cập Nhập Thành Công');
    }
    //sửa bài//
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->back()->with('massage', 'Xóa Thành Công');
    }
}
