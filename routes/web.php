<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect(route('admin.book.index'));
    }
    return view('login')->name('login');
});
//    Route::post('/login', function () {
//        return redirect(route('admin.book.index'));
//    });
//    Route::get('/logout', [])->name('logout');
    Route::get('/register', function () {
        if (Auth::check()) {
            return redirect(route('login'));
        }
        return view('register')->name('register');

//    Route::post('/registration', []);


});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Author', 'prefix' => 'authors'], function () {
        Route::get('/', [App\Http\Controllers\Admin\Author\IndexController::class, 'index'])->name('admin.author.index');
        Route::get('/create', [App\Http\Controllers\Admin\Author\CreateController::class, 'create'])->name('admin.author.create');
        Route::post('/', [App\Http\Controllers\Admin\Author\StoreController::class, 'store'])->name('admin.author.store');
        Route::get('/{author}', [App\Http\Controllers\Admin\Author\ShowController::class, 'show'])->name('admin.author.show');
        Route::get('/{author}/edit', [App\Http\Controllers\Admin\Author\EditController::class, 'edit'])->name('admin.author.edit');
        Route::patch('/{author}', [App\Http\Controllers\Admin\Author\UpdateController::class, 'update'])->name('admin.author.update');
        Route::delete('/{author}', [App\Http\Controllers\Admin\Author\DeleteController::class, 'destroy'])->name('admin.author.delete');
    });
    Route::group(['namespace' => 'Book', 'prefix' => 'books'], function () {
        Route::get('/', [App\Http\Controllers\Admin\Book\IndexController::class, 'index'])->name('admin.book.index');
        Route::get('/create', [App\Http\Controllers\Admin\Book\CreateController::class, 'create'])->name('admin.book.create');
        Route::post('/', [App\Http\Controllers\Admin\Book\StoreController::class, 'store'])->name('admin.book.store');
        Route::get('/{book}', [App\Http\Controllers\Admin\Book\ShowController::class, 'show'])->name('admin.book.show');
        Route::get('/{book}/edit', [App\Http\Controllers\Admin\Book\EditController::class, 'edit'])->name('admin.book.edit');
        Route::patch('/{book}', [App\Http\Controllers\Admin\Book\UpdateController::class, 'update'])->name('admin.book.update');
        Route::delete('/{book}', [App\Http\Controllers\Admin\Book\DeleteController::class, 'destroy'])->name('admin.book.delete');
        Route::get('/search', [App\Http\Controllers\Admin\Book\SearchController::class, 'search'])->name('admin.book.search');
    });
    Route::group(['namespace' => 'Genre', 'prefix' => 'genres'], function () {
        Route::get('/', [App\Http\Controllers\Admin\Genre\IndexController::class, 'index'])->name('admin.genre.index');
        Route::get('/create', [App\Http\Controllers\Admin\Genre\CreateController::class, 'create'])->name('admin.genre.create');
        Route::post('/', [App\Http\Controllers\Admin\Genre\StoreController::class, 'store'])->name('admin.genre.store');
        Route::get('/{genre}', [App\Http\Controllers\Admin\Genre\ShowController::class, 'show'])->name('admin.genre.show');
        Route::get('/{genre}/edit', [App\Http\Controllers\Admin\Genre\EditController::class, 'edit'])->name('admin.genre.edit');
        Route::patch('/{genre}', [App\Http\Controllers\Admin\Genre\UpdateController::class, 'update'])->name('admin.genre.update');
        Route::delete('/{genre}', [App\Http\Controllers\Admin\Genre\DeleteController::class, 'destroy'])->name('admin.genre.delete');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


