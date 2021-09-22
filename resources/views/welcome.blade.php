@foreach ($articles as $article)
    <div>{{ $article->title }} - {{ $article->author->name }}</div>
@endforeach
