<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// route halaman home
Route::get('/', function () {
    return view('page.home', [
        "title" => "Home",
    ]);
});
// route halaman about
Route::get('/about', function() {
    return view('page.about', [
        "title" => "About",
        "name" => "Ahmad Ilham",
        "email" => "ahmad13ilham13@gmai.com",
        "image" => "ilham.png"
    ]);
});
// route halaman blog
Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

// route halaman category
Route::get('/categories', function(){
    return view('page.categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

// route untuk tamu
Route::middleware(['guest'])->group(function() {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    // Register
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});
// route untuk auth (user)
Route::middleware(['auth'])->group(function() {
    // setelah sukses login
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    })->middleware('auth');
    // CRUD Posts Dashboard
    Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
});
// route untuk admin
Route::middleware(['admin'])->group(function() {
    // CRUD categories Dashboard
    Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
});
// logout
Route::post('/logout', [LoginController::class, 'logout']);

