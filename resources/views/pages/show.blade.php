<h1>{{ $page->title }}</h1>

@if($page->description)
    <p>{{ $page->description }}</p>
@endif

<p>{{ $page->content }}</p>