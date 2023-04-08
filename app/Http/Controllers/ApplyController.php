<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\Apply;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{


    // ứng tuyên//
    public function apply($id)
    {
        $category = categoryModel::all();
        return view('layouts.pages.userapply.apply', compact('id', 'category'));
    }
    // ứng tuyên//



    //kiểm tra ứng tuyên//
    public function checkapply($id)
    {
        $dat = new Apply;
        $data = $dat->find($id);
        $data->status = 2;
        $data->save();
        return back();
    }
    //kiểm tra ứng tuyên//



    //show ứng tuyên//
    public function showapply()
    {

        $id_user = Auth::user()->id;
        $data = Apply::where('id_user', '=', $id_user)->get();
        return view('layouts.pages.userapply.showapply', compact('data'));
    }

    
    public function showapply1($id)
    {


        $data = Apply::where('id_post', '=', $id)->where('status', '=', 0)->get();
        return view('layouts.pages.userapply.showapply', compact('data'));
    }

    //show ứng tuyên//



    //gửi cv ứng tuyên//

    public function postApply(Request $request)
    {
        //dd($request->all());
        if ($request->has('fileCV')) {
            $img1 = $request->fileCV;
            $extension = $request->fileCV->extension();
            $img1Name = time() . '-1.' . $extension;
            $img1->move(public_path('fileUploads'), $img1Name);
            $request->fileCV = $img1Name;
        }
        if (Apply::create([
            'id_user' => Auth::user()->id,
            'id_post' => $request->id_post,
            'name' => $request->name,
            'numberPhone' => $request->numberPhone,
            'email' => $request->email,
            'fileCV' => $request->fileCV,
            'status' => 0
        ])) {
            return redirect()->route('showListPost')->with('success', 'Apply thành công.');
        }
    }

    //gửi cv ứng tuyên//




    
    public function delete($id)
    {
        Apply::find($id)->delete();

        return redirect()->route('showapplypost')->with('success', 'Xóa thành công.');
    }
    public function deleteapply($id)
    {
        Apply::find($id)->delete();

        return redirect()->back()->with('success', 'Xóa thành công.');
    }
}
