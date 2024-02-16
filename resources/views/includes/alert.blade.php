@php($color = session('color'))

@if ($alert = session()->pull('alert'))
    <div class="alert alert-{{$color}} mb-0 rounded-0 text-center small py-2">
        {{ $alert }}
    </div>
@endif