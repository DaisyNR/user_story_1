<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller implements HasMiddleware
{
    public function create()
    {
        return view('article.create');
    }

    public function show(Article $article)
    {
        $article->load('category','images');
        return view('article.show', compact('article'));
    }

    public function store(Request $request)
    {
        //
    }  

    public function index(){
        $articles = Article::with('category')->where('is_accepted',true)->orderBy('created_at','desc')->paginate(10);
        return view('article.index', compact('articles'));
    }

    public function byCategory(Category $category){
        $articles = $category->articles()->where('is_accepted',true)->with('category')->get();
        return view('article.byCategory',compact('articles','category'));
    }

    public static function Middleware() : array {

        return [
            new Middleware('auth', only:['create'],)
        ];
        
    }
}
