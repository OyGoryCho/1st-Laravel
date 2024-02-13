<x-card>
    <x-card-header>
        <x-card-title>
            <h4 class="m-0">
            {{__('Регистрация')}}
            </h4>
        </x-card-title>
        <x-slot name="right">
            <a href="{{route('login')}}">
                {{__('Войти')}}
            </a>
        </x-slot>
    </x-card-header>
    
    <x-card-body>
        <x-form action="{{route('register.store')}}" method="POST">    
            <x-form-item>
                <x-label required>{{__('Имя')}}</x-label>
                <x-input  name="name" class="form-control" autofocus/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{__('Почта')}}</x-label>
                <x-input type="email" name="email"  class="form-control"/>
            </x-form-item>

            <x-form-item class="mb-2">
                <x-label required>{{__('Пароль')}}</x-label>
                <x-input type="password" name="password" class="form-control"/>
            </x-form-item>

            <x-form-item class="mb-2">
                <x-label required>{{__('Повтор пароля')}}</x-label>
                <x-input type="password" name="password_comfirmation" class="form-control"/>
            </x-form-item>

            <x-form-item class="mb-4">
                <x-checkbox name="agreement" >
                    {{ __('Я согласен на обработку пользоавтельских данных')}}
                </x-checkbox>                             
            </x-form-item>

            <x-button type="submit"  >
                {{__('Зарегистрироваться')}}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>