<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class,'homepage'])->name('homepage');
Route::get('/create/article', [ArticleController::class,'create'])->name('create.article');
Route::post('/article/create/submit',[ArticleController::class,'store'])->name('article.submit');
Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');

