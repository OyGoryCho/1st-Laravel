<x-card>
    <x-card-header>
        <x-card-title>
            <h4 class="m-0">
            {{__('Вход')}}
            </h4>
        </x-card-title>
        <x-slot name="right">
            <a href="{{route('register')}}">
                {{__('Регистрация')}}
            </a>
        </x-slot>
    </x-card-header>
    
    <x-card-body>
        <x-form action="{{route('login.store')}}" method="POST">
            <x-form-item>
                <x-label required>{{__('Email')}}</x-label>
                <input type="email" name="email" class="form-control" autofocus/>
            </x-form-item>
            
            <x-form-item class="mb-2">
                <x-label required>{{__('Password')}}</x-label>
                <input type="password" name="password" class="form-control"/>
            </x-form-item>

            <x-form-item class="mb-4">
                <x-checkbox name="remember">
                    {{ __('Запомнить меня')}}
                </x-checkbox>                             
            </x-form-item>

            <x-button type="submit"  >
                {{__('Войти')}}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>
