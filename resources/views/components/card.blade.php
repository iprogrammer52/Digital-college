<div class="card mb-2">
    @if ($image != '')
        <img
            src="{{asset("images/{$image}")}}"
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
