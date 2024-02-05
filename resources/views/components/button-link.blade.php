@props(['color' => 'secondary', 'size' => ''])

<a {{$attributes}}>
    <x-button size="sm" color="{{$color}}">
        {{$slot}}
    </x-button>
</a>