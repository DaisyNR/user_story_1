<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class,'homepage'])->name('homepage');
Route::get('/create/article', [ArticleController::class,'create'])->name('create.article');
Route::post('/article/create/submit',[ArticleController::class,'store'])->name('article.submit');
Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');
Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article.show');
// Categories
Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');
// Revisori
Route::get('revisor/index',[RevisorController::class,'index'])->name('revisor.index');
Route::patch('/accept/{article}',[RevisorController::class,'accept'])->name('accept');
Route::patch('/reject/{article}',[RevisorController::class,'reject'])->name('reject');
Route::get('/make/revisor/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');
// Mail
Route::get('/revisor/request',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
// Search bar
Route::get('/search/article',[PublicController::class,'searchArticles'])->name('article.search');
// Languages
Route::post('/lingua/{lang}', [PublicController::class,'setLanguage'])->name('setLocale');

