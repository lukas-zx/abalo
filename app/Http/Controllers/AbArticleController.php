<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AbArticle;
use Illuminate\Support\Facades\DB;

class AbArticleController extends Controller
{
    function search(Request $request) {
        $article = $request['search'];
        $article = strtolower($article);
        $article = '%' . $article . '%';
        $articles = AbArticle::select()
        ->where('ab_name', 'ilike', $article)
        ->get();

        foreach ($articles as $article) {
            $article['ab_image'] = 'no image';
            $imgpath = public_path() . '\img\\';
            if (file_exists($imgpath . $article['id'] . '.png')) {
                $article['ab_image'] = '/img/' . $article['id'] . '.png';
            }
            if (file_exists($imgpath . $article['id'] . '.jpg')) {
                $article['ab_image'] = '/img/' . $article['id'] . '.jpg';
            }
        }


        $data = [
            'articles' => $articles
        ];

        return view('articles', $data);
    }
}
