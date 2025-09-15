<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleRequest;
use App\Http\Resources\Admin\ArticleCategoryResource;
use App\Http\Resources\Admin\ArticleQuiriesResource;
use App\Http\Resources\Admin\ArticleResource;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleClientQuiry;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function indexPageQueries(Request $request): View
    {
        return view('admin.articles.index-queries');
    }

    public function articlesQueries()
    {
        $data = ArticleClientQuiry::paginate(10);
        return responseJson(ArticleQuiriesResource::collection($data->items()), '', 200, getPaginates($data));
    }

    public function indexPage(Request $request): View
    {
        return view('admin.articles.index');
    }

    public function index(Request $request)
    {
        $data = Article::with('media')->paginate(10);
        return responseJson(ArticleResource::collection($data->items()), '', 200, getPaginates($data));
    }

    public function store(ArticleRequest $request)
    {
        $data = Article::create($request->validated());
        saveFiles($request->image, $data, "articles");
        return responseJson([], 'Created Successfully', 200);
    }

    public function show($id)
    {
        $data = Article::with(['media'])->find($id);
        return responseJson($data, 'Data exited successfully', 200);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        if ($request->hasFile('image'))
            saveFiles($request->image, $article, "articles", null, 'update');

        $article->update($request->validated());
        return responseJson([], 'Updated Successfully', 200);
    }

    public function destroy(Article $article)
    {
        deleteFile($article);
        $article->delete();
        return responseJson([], 'Deleted Successfully', 200);
    }

    public function getCategories()
    {
        return responseJson(ArticleCategoryResource::collection(ArticleCategory::latest()->get()));
    }
}
