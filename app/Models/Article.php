<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'articles';

    protected $fillable = ['title', 'description'];

    public static function setListToRedis(): void
    {
        $articles = Article::all();
        Cache::store('redis')->put('articles', $articles);
    }

    public static function getListFromRedis(): Collection
    {
        if (!Cache::store('redis')->get('articles')) {
            Article::setListToRedis();
        }
        return Cache::store('redis')->get('articles');
    }
}
