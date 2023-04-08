<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\categoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   //
   public function __construct()
    {
        $this->middleware('auth');
    }
//trang index chứa danh sách danh mục//
    public function index()
    {
        $cate = categoryModel::all();

        return view('admin.category.IndexCategory', compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //thêm danh mục//
    public function create()
    {
        return view('admin.category.AddCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //thêm danh mục//
    public function store(Request $request)
    {
        $request->validate([


            //unique ko được nhập trùng tên//
            'name' => ['required', 'unique:category', 'max:255'],

        ]);
 
        $cate = new categoryModel();
      
        $cate->name = $request['name'];
        $cate->save();
        return redirect()->back()->with('massage', 'Thêm Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //hiển thị  danh mục//
    public function show($id)
    {
        $cate  =  categoryModel::find($id);
        return view('admin.category.ShowCategory', compact('cate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $cate  =  categoryModel::find($id);
        return view('admin.category.EditCategory', compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //nhập thông tin update
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'name' => ['required:"xin cảm ơn"', 'unique:category', 'max:255'],

        ]);

        $cate  =  categoryModel::find($id);
        $cate->name = $request['name'];
        $cate->save();
        return redirect()->back()->with('massage', 'Cập Nhập Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //xóa danh mục//
    public function destroy($id)
    {
        categoryModel::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa Thành Công');
    }
}
