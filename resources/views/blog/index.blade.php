@extends('layouts.base')


@section('content')
<h1 class="mb-5">
Страница постов
</h1>


@if (empty($posts))
    Пока нет ни одного поста
@else
    @foreach ($posts as $post)
        <div>
            <h5 class="mt-4">
                <a href="{{route('blog.show', $post->id)}}">
                    {{$post->title}}
                </a>
            </h5>
            <p>
                {!!$post->content!!}
            </p>
        </div>
    @endforeach
@endif

@endsection
