<?php

use Illuminate\Support\Facades\Route;
// Controllers
use App\Http\Controllers\MovieController;

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
    return view('welcome');
});

Route::get('/admin-home',function(){
    return view('admin-layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

// Redirect if admin go to admin controller
// Route::get('/admin-home', function () {
//     return redirect('/home/dashboard');
// });

Route::resource('movies', MovieController::class);

Route::get('/movies',[MovieController::class, 'index'])->name('index');
Route::get('/create',[MovieController::class, 'create'])->name('create');
Route::post('store/',[MovieController::class, 'store'])->name('store');
Route::get('show/{movie}',[MovieController::class, 'show'])->name('show');
Route::get('edit/{movie}',[MovieController::class, 'edit'])->name('edit');
Route::put('edit/{movie}',[MovieController::class, 'update'])->name('update');
Route::delete('/{movie}',[MovieController::class, 'destroy'])->name('destroy');


require __DIR__.'/auth.php';
