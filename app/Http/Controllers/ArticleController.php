<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function article_1281(Request $request)
    {
        return view('website.articles.alz.article_1281');
    }
    public function article_1282(Request $request)
    {
        return view('website.articles.alz.article_1282');
    }
    public function article_1283(Request $request)
    {
        return view('website.articles.alz.article_1283');
    }
    public function article_1302(Request $request)
    {
        return view('website.articles.alz.article_1302');
    }
    public function article_1317(Request $request)
    {
        return view('website.articles.alz.article_1317');
    }
}
