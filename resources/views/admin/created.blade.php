<div id="article-{{$article->id}}">
    <h2>{{ $article->title }}</h2>
    <div class="article-show" style='cursor: pointer;' onclick="articleShow({{$article->id}})">
        Expand
    </div>
    <div class="article-remove" style='cursor: pointer;' onclick="articleRemove({{$article->id}})">
        Remove
    </div>
    <div id="article-not-found-{{$article->id}}">
    </div>
    <hr>
</div>

