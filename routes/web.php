<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ApplyJobController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CheckMailController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckUserControlller;
use App\Http\Controllers\PostAdminController;
use App\Models\Post;
use App\Models\categoryModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are lhoaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Auth::routes();

//fontend

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/job_details', ApplyJobController::class);

//home
Route::get('/', function () {

    $category = categoryModel::all();
    $data = Post::paginate(5);
    return view('layouts.pages.home', compact('data', 'category'));
});

Route::get('/about', function () {
    return view('layouts.pages.about');
})->name('about');

Route::post('/search', [PostController::class, 'search'])->name('search');
Route::get('/sorta', [PostController::class, 'sortaz'])->name('sort');
Route::get('/sortprice1', [PostController::class, 'sortaz1'])->name('sort1');
// Route::get('/sortprice2', [PostController::class, 'sortprice'])->name('sort-2');




Route::get('/viewPost/{id}', [PostController::class, 'viewPost'])->name('viewPost');
// nhà tuyển dụng
Route::get('/Post', [PostController::class, 'showListPost'])->name('showListPost');

Route::get('/category/{id}', [PostController::class, 'listcate'])->name('category');

Route::get('/Apply/{id}', [ApplyController::class, 'apply'])->name('apply');
Route::POST('/postApply', [ApplyController::class, 'postApply'])->name('postApply');
Route::get('/Show-Apply', [ApplyController::class, 'showapply'])->name('showapply');
Route::get('/deleteapply/{id}', [ApplyController::class, 'deleteapply'])->name('deleteapply');
Route::get('/Show-ApplyPost/{id}', [ApplyController::class, 'showapply1'])->name('showapplypost');
Route::get('/checkApply/{id}', [ApplyController::class, 'checkapply'])->name('checkapply');
Route::prefix('User-Post')->group(function () {
    Route::get('/add', [PostController::class, 'add'])->name('PostAdd');
    Route::get('/list', [PostController::class, 'list'])->name('PostList');
    Route::POST('/postaddPost', [PostController::class, 'postadd'])->name('PostDataPost');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('PEdit');
    Route::get('/info/{id}', [PostController::class, 'info'])->name('infoPost');
    Route::post('/postEdit', [PostController::class, 'postedit'])->name('PostEdit');
    Route::get('/delete/{id}', [PostController::class, 'delete'])->name('PostDelete');
});
//user//
Route::get('/edituser', [CheckUserControlller::class, 'edituser'])->name('edituser');
// ứng viên apply
Route::prefix('Apply')->group(function () {
    Route::get('/', [PostController::class, 'add'])->name('PostAdd');
    Route::POST('/postaddPost', [PostController::class, 'postadd'])->name('PostDataPost');
});
Route::prefix('love')->group(function () {

    Route::get('/addlove/{post_id}', [PostController::class, 'addlove1'])->name('love');
    Route::get('/show', [PostController::class, 'listlove'])->name('listlove');
    Route::get('/deletelove/{id}', [PostController::class, 'deletelove'])->name('deletelove');
});
Route::prefix('profile')->group(function () {


    Route::get('/show', [CheckUserControlller::class, 'showprofile'])->name('showprofile');
    Route::post('/edit', [CheckUserControlller::class, 'editprofile'])->name('editprofile');
});

//backend
Route::get('admin/home', [adminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
///Category
Route::resource('/Category', categoryController::class);
//Properties
Route::resource('/Properties', PropertiesController::class);
//Post
Route::resource('/PostAdmin', PostAdminController::class);
Route::resource('/CheckUser', CheckUserControlller::class);
//check//
Route::get('/email/{id}',[EmailController::class, 'create'])->name('email'); 
Route::post('/email',[EmailController::class, 'sendEmail'])->name('send.email');
