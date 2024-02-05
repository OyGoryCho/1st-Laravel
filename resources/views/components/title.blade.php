@props(['reverse' => false])

<div {{$attributes->class([
"h2 d-flex  justify-content-between border-bottom", ($reverse ? 'flex-row' : 'flex-row-reverse')])}}>   
    @isset($link)
        <div class="mb-3">
            {{$link}}
        </div>
    @endisset
    

        <div>
            <h1 >
                {{$slot}} 
             </h1>
        </div>

        @isset($right)
            <div>
                {{$right}}
            </div>
        @endisset
    
</div>