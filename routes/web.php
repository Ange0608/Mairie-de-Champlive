<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DeliberationController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/article/{article}', [FrontArticleController::class, 'show'])->name('article');
Route::get('/nos-articles', [FrontArticleController::class, 'index'])->name('nos-articles');
Route::get('/', [FrontHomeController::class, 'index'])->name('home');
Route::get('/rubrique-souvenirs', [FrontHomeController::class, 'galleries'])->name('rubrique-souvenirs');
Route::get('/journal', [FrontHomeController::class, 'newspaper'])->name('journal');
Route::get('/nos-associations', [FrontHomeController::class, 'association'])->name('nos-associations');
Route::get('/nos-membres', [FrontHomeController::class, 'member'])->name('nos-membres');
Route::get('/nos-deliberations', [FrontHomeController::class, 'deliberation'])->name('nos-deliberations');
Route::get('/services-alentours', [FrontHomeController::class, 'service'])->name('services-alentours');
Route::get('/rubrique-souvenirs', [FrontHomeController::class, 'gallery'])->name('rubrique-souvenirs');

Route::get('/numbers', function () {
    return view('numbers');
})->name('numeros-utiles');

Route::get('/legal-informations', function(){
    return view('legal-informations');
})->name('mentions-legales');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); })->name('dashboard');
    Route::get('/admin/profile', function () {
        return view('profile.show'); })->name('profile.admin');


    Route::resource('articles', ArticleController::class);
    // Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    // Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    // Route::post('/articles',[ArticleController::class, 'store'])->name('articles.store');
    // Route::get('/articles/{article}',[ArticleController::class, 'show'])->name('articles.show');
    // Route::get('/articles/{article}/edit',[ArticleController::class, 'edit'])->name('articles.edit');
    // Route::put('/articles/{article}',[ArticleController::class, 'update'])->name('articles.update');
    // Route::delete('/articles/{article}',[ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('members', MemberController::class);

    Route::resource('deliberations', DeliberationController::class);

    Route::resource('associations', AssociationController::class);

    Route::resource('services', ServiceController::class);

    Route::resource('galleries', GalleryController::class);

    Route::resource('newspapers', PaperController::class);

});

