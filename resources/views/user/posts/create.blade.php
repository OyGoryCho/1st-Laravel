@extends('layouts.main')
@section('page.title', 'Создать пост')

@section('main.content')
    <x-title>
        {{__('Создать пост')}}

        <x-slot name="link" >
            <x-button-link href="{{route('user')}}" color="danger">
                {{__('Отмена')}}   
            </x-button-link>
        </x-slot>
    </x-title>  

    <x-form action="{{ route('user.posts.store')}}" method="POST">
        <x-form-item>
            <x-label required>{{__('Название поста')}}</x-label>
            <x-input name="title" autofocus/>
        </x-form-item>

    </x-form>
    
    
@endsection
