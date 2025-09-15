<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleClientQuiry;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $setting = Setting::first();
        $services = Service::with('icon','image')->whereStatus(1)->orderBy('sort','asc')->get();
        $articles = Article::where(function ($q) {
            if (request()->search) {
                $q->where(function ($q) {
                    $q->where("title_ar", "like", "%" . request()->search . "%")
                        ->where("title_en", "like", "%" . request()->search . "%")
                        ->where("content_ar", "like", "%" . request()->search . "%")
                        ->where("content_en", "like", "%" . request()->search . "%");
                });
            }

            if (request()->category_id) {
                $q->where('category_id', request()->category_id);
            }
        })->whereStatus(1)->paginate(10);
        $categories = ArticleCategory::get();
        return view('website.articles', compact('articles', 'setting', 'categories','services'));
    }

    public function blogDetails($slug)
    {
        $article = Article::where('slug_ar',$slug)->orWhere('slug_en',$slug)->firstOrFail();
        $setting = Setting::first();
        $services = Service::with('icon','image')->whereStatus(1)->orderBy('sort','asc')->get();
        $categories = ArticleCategory::get();
        $latestArticles = Article::where("id",'!=',$article->id)->latest()->limit(3)->get();
        return view('website.article-details', compact('article', 'setting','categories','latestArticles','services'));
    }

    public function submitQuiry(){
        $data = request()->validate([
            "name" => "required",
            "email" => "required|email",
            "article_id" => "required|exists:articles,id",
            "comment" => "required"
        ]);

        ArticleClientQuiry::create($data);


        return redirect()->back()->with('success',__('website.Your inquery has been submitted successfully'));

    }
}
