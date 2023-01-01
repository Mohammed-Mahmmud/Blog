<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
 });

Route::view('/about','AboutMe')->name('about');
Route::view('/welcome','welcome')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::prefix('/posts')->middleware('auth')->group(function(){
    Route::get('/',[PostController::class,'indexAction'])->name('posts.index');
    Route::get('/create',[PostController::class,'createAction'])->name('posts.create');
    Route::post('/',[PostController::class,'storeAction'])->name('posts.store');
    Route::get('/edit/{post}',[PostController::class,'editAction'])->name('posts.edit');
    Route::put('/{post}',[PostController::class,'updateAction'])->name('posts.update');
    Route::get('/{post}',[PostController::class,'showAction'])->name('posts.show');
    Route::delete('/{post}',[PostController::class,'destroyAction'])->name('posts.destroy');

});

 //for the about link
