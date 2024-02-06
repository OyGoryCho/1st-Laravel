@extends('layouts.main')
@section('page.title', 'Изменить пост')

@section('main.content')
    <x-title>
        {{__('Изменить пост')}}

        <x-slot name="link" >
            <x-button-link href="{{route('user')}}" color="danger">
                {{__('Отмена')}}   
            </x-button-link>
        </x-slot>
    </x-title >  

    <x-post.form action="{{ route('user.posts.update', $post->id)}}" :post="$post" />   
@endsection
