@props(['name' => '', 'value' => ''])

<input id="{{$name}}" type="hidden" name="{{$name}}" value="{{$value}}">
<trix-editor input="{{$name}}"></trix-editor>

@once
    @push('js')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    @endpush
@endonce