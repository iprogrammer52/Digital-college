<div class="card mb-3">
    @if ($image != '')
        <img src="/images/{{$image}}" class="card-img-top" alt="...">    
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">
            {{$body}}
        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
