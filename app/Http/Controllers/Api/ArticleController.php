<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request): JsonResponse
    {
        $article = Article::create([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
        return response()->json([
            'message' => 'Successfully created!',
            'model' => $article,
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return JsonResponse
     */
    public function update(ArticleRequest $request, Article $article): JsonResponse
    {
        $article->update([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);

        return response()->json([
            'message' => 'Successfully updated!',
            'model' => $article,
        ], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return JsonResponse
     */
    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json([
            'message' => 'Successfully deleted!',
            'model' => '',
        ], 204);
    }
}
