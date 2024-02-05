@extends('layouts.main')
@section('page.title', 'Наш блог')

@section('main.content')
    <x-title reverse>
        {{__('Список постов')}}
    </x-title>  
    @if (empty($posts))
            {{__('Пока нет ни одного поста')}}
        @else
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach
        </div> 
            
    @endif 
@endsection
