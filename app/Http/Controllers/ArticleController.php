<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        //
    }  

    public function index(){
        $articles = Article::all();
        return view('article.index', ['articles'=> $articles]);
    }
}
