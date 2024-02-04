@extends('layouts.base')
@section('page.title', 'Страница входа')


@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <x-card>
                        <x-card-header>
                            <x-card-title>
                                <h4 class="m-0">
                                {{__('Вход')}}
                                </h4>
                            </x-card-title>
                        </x-card-header>
                        
                        <x-card-body>
                            <x-form action="{{route('login.store')}}" method="POST">
                                <x-form-item class="mb-3">
                                    <label class="required">{{__('Email')}}</label>
                                    <input type="email" name="email" class="form-control" autofocus>
                                </x-form-item>
                                
                                <x-form-item class="mb-2">
                                    <label class="required">{{__('Password')}}</label>
                                    <input type="password" name="password" class="form-control">
                                </x-form-item>


                                <x-form-item class="mb3 mb-4">
                                    <x-form-item class="form-check">
                                        <input type="checkbox" name="remember" value="1"  class="form-check-input" id="remember">

                                        <label class="form-check-label" for="remember">
                                            {{__('Запомнить меня')}}
                                        </label>
                                    </x-form-item>                                      
                                </x-form-item>

                                <button type="submit" class="btn btn-primary">
                                    {{__('Войти')}}
                                </button>
                            </x-form>
                        </x-card-body>
                    </x-card>
                </div>
            </div>
        </x-container>
    </section>
@endsection

