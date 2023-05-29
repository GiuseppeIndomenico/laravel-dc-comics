<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Models\Comic;


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

Route::resource('comics', ComicController::class)->only(['index', 'show']);

Route::get('/', function () {
    $data = [
        'navs' => config('dbOption.navs'),
        'options' => config('dbOption.options'),
        'dcComics' => config('footer-links.dcComics'),
        'shop' => config('footer-links.shop'),
        'dc' => config('footer-links.dc'),
        'sites' => config('footer-links.sites'),
        'socials' => config('footer-links.socials'),
        'comics' => \App\Models\Comic::all(),
        'id' => null,
    ];

    return view('home', $data);
})->name('home');