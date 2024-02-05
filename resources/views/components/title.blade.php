<div class="">   
    @isset($link)
        <div class="mb-3">
            {{$link}}
        </div>
    @endisset
    
    <h1 class="mb-5">
       {{$slot}} 
    </h1>
</div>