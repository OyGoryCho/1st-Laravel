@props(['name' => 'content' , 'post' => null])


<div>
    <x-form {{$attributes}}>
        <x-form-item>
            <x-label required>{{__('Название поста')}}</x-label>
            <x-input name="title" value="{{ $post->title ?? ''}}" autofocus/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{__('Содержание поста')}}</x-label>
            <x-trix  name="{{$name}}" value="{{ $post->content ?? '' }}" />
        </x-form-item>

        
        {{$slot}}
    </x-form>
</div>