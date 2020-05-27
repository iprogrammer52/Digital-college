<div
    class="alert @if($type) alert-{{$type}} @else alert-light @endif alert-dismissible fade show"
    role="alert"
>
{{$text}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
