<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

//auth route for both
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

route::get('profile',[DashboardController::class,'profile'])->name('p.profile');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
require __DIR__.'/auth.php';


Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/users/create', [UserController::class,'create'])->name('users.create');
Route::post('/users/store', [UserController::class,'store'])->name('users.store');

Route::get('/users/{user}/show', [UserController::class,'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class,'edit'])->name('users.edit');
Route::PATCH('/users/{user}/update', [UserController::class,'update'])->name('users.update');

Route::delete('/users/{user}/destroy', [UserController::class,'destroy'])->name('users.destroy');





Route::get('/posts',[PostController::class,'index'] )->name('posts');
Route::get('/post/create', [PostController::class,'create'])->name('post.create');
Route::post('/post/store', [PostController::class,'store'])->name('post.store');
Route::get('/post/show/{id}', [PostController::class,'show'])->name('post.show');

Route::get('/accueil', [PostController::class,'accueil'])->name('acueil');



Route::post('/comment/store', [CommentController::class,'store'])->name('comment.add');

Route::post('/reply/store',   [CommentController::class,'replyStore'])->name('reply.add');


//  Route::resource('appointments',[AppointmentController::class] );
Route::get('appointments', [AppointmentController::class,'index'])->name('appointments.index');
 Route::get('appointments/create', [AppointmentController::class,'create'])->name('appointments.create');
 Route::post('appointments/store', [AppointmentController::class,'store'])->name('appointments.store');
 Route::get('appointments/show', [AppointmentController::class,'show'])->name('appointments.show');
 Route::get('appointments/edit', [AppointmentController::class,'edit'])->name('appointments.edit');
 Route::put('appointments/update', [AppointmentController::class,'update'])->name('appointments.update');
 Route::delete('appointments/destroy', [AppointmentController::class,'destroy'])->name('appointments.destroy');
