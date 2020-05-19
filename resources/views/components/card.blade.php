<a href="{{ asset('news/' . $id) }}" class="text-decoration-none text-dark">
<div class="card mb-2 shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col-11">
                <h5 class="card-title">
                    {{ $title }}
                </h5>
            </div>
        </div>
        <p class="card-text">
            {{ $body }}
        </p>
        <p class="card-text">
            <small class="text-muted">
                {{ $date }}
            </small>
        </p>
    </div>
    @if($image != '')
        <img
            src="{{ asset("storage/{$image}") }}"
            class="card-img-bottom cm-auto-size-image p-3"
        >
    @endif
</div>
</a>