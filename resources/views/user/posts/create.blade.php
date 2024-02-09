@extends('layouts.main')
@section('page.title', 'Создать пост')

@section('main.content')
    <x-title>
        {{__('Создать пост')}}

        <x-slot name="link" >
            <x-button-link href="{{route('user')}}" color="dark">
                {{__('Назад')}}   
            </x-button-link>
        </x-slot>

    </x-title >  
    
    <x-post.form action="{{ route('user.posts.store')}}" method="POST">
        <x-button type="submit">
            {{__('Создать пост')}}
        </x-button>
    </x-post.form>

    
@endsection

