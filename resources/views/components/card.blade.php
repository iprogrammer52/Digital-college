<div class="card mb-2 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">
            {{$title}}
        </h5>
        <p class="card-text">
            {{$body}}
        </p>
        <p class="card-text">
            <small class="text-muted">
                {{$date}}
            </small>
        </p>
    </div>
    @if($image != '')
        <img
            src="{{asset("storage/{$image}")}}"
            class="card-img-bottom"
        >
    @endif

</div>
