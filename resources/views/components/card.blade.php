<div class="card mb-2 shadow-sm">
    @if ($image != '')
        <img
            src="{{asset("storage/{$image}")}}"
            class="card-img-top"
        >
    @endif
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
</div>
