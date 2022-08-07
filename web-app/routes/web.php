<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePostsController;
use App\Http\Controllers\AdminCategoryController;
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



Route::get('/', [HomeController::class, 'index']);
Route::get('/HomePost/{Post:slug}',[HomeController::class, 'show']);

Route::get('/Blog', [PostController::class, 'index']);
Route::get('/Post/{Post:slug}',[PostController::class, 'show']);


Route::get('/Contact', function () {
    return view('Contact',[
        "title" => "My Website - Contact"
    ]);
});



Route::get('/About', [AboutController::class, 'index']);

Route::get('/Categories', [CategoryController::class, 'index']);
Route::get('/Categories/{Category:slug}',[CategoryController::class, 'show']);

Route::get('/User/{users}', [UserController::class, 'index']);

Route::get('/Sign', [SignController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Sign', [SignController::class, 'Authenticate']);
Route::post('/SignOut', [SignController::class, 'SignOut']);

Route::get('/Registrasi', [RegistController::class, 'index'])->middleware('guest');
Route::post('/Registrasi', [RegistController::class, 'store']);

Route::get('/Dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/Dashboard/Posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/Dashboard/Posts', DashboardPostController::class)->middleware('auth');
Route::resource('/Dashboard/Categories', AdminCategoryController::class)->middleware('admin');

Route::get('/Dashboard/Home/Posts/homeCheckSlug', [HomePostsController::class, 'homeCheckSlug'])->middleware('auth');
Route::resource('/Dashboard/Home/Posts', HomePostsController::class)->middleware('auth');


