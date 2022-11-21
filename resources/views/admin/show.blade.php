<div id="article-edit-{{$article->id}}">
    <h1>{{ $article->title }}</h1>
    <h3>{{ $article->description }}</h3>
    <em>{{ $article->created_at }}</em>
    <div class="article-show" style='cursor: pointer;' onclick="articleEdit({{$article->id}})">
        Edit
    </div>
    <hr>
</div>
