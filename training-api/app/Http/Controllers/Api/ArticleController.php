<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    /**
     * Retrieve the list => select all item in table article
     *
     * @return Article[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Article::all();
    }

     /***
     * Retrieve a single one => select item in table article by  id
     *
     * @param $id
     * @return mixed
     */
    public function show(Article $article)
    {
        return $article;
    }

    /***
     * Insert new item in table article
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    /***
     * @param Request $request
     * @param Article $article
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());


        return response()->json($article, 200);
    }


    /***
     * Delete one item in table article by id
     *
     * @param Article $article
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }


}
