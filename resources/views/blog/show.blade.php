@extends('layouts.main')
@section('page.title', $post->title)


@section('main.content')
    <x-title>
        {{$post->title}}

        <x-slot name="link" >
            <x-button-link href="{{route('blog')}}">
                {{__('Назад')}}   
            </x-button-link>
        </x-slot>
    </x-title>  

    {!! $post->content !!}
@endsection
