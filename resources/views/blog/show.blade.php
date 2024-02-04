@extends('layouts.base')
@section('page.title', $post->title)

@section('content')
<div>
    <h1 class="mb-5">
    {{ $post->title }}
    </h1>
    
    
    <p>
        {!!$post->content!!}
    </p>
    
    <a href="{{route('blog')}}" class=>
        Назад
    </a>
</div>
@endsection
