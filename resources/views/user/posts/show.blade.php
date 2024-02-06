@extends('layouts.main')
@section('page.title')

@section('main.content')
   
    <x-title class="">
        <x-slot name="link" >
            <x-button-link href="{{route('user')}}">
                {{__('Назад')}}   
            </x-button-link>
            <x-button-link href="{{route('user.posts.edit', $post->id)}}" color="dark" class="ms-2">
                {{__('Изменить')}}
            </x-button-link>
        </x-slot>
            {{__('Просмотр поста')}}
    </x-title>  

    <h4>
        {{$post->title}}
    </h4>
    <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s')}}
    </div>
    <div class="pt-5">
        @if (empty($post))
                {{__('Нет описания')}}
            @else
                {!!$post->content!!}
        @endif 
    </div>
@endsection
