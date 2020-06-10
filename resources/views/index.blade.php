@extends('layouts/app')

@section('content')
<div id="carouselExampleControls" class="carousel slide mt-n4 mb-4 d-none d-md-block" data-ride="carousel">
    <div class="carousel-inner d-flex">
        <div class="carousel-item active">
            <img src="https://video-vr-360.ru/wp-content/uploads/2020/04/18-e1587377738750-1024x407.jpg" class="d-block w-100 cm-image-wrapper" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cameralabs.org/media/camera/may/23may2/33_4caaf6d27a395dc6b511eb570f701c60.jpg" class="d-block w-100 cm-image-wrapper" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://hsto.org/getpro/geektimes/post_images/437/2e1/44f/4372e144f9ce6b6500bd31999f92ffc7.jpg" class="d-block w-100 cm-image-wrapper" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-12 d-flex justify-content-center flex-column mb-4 pl-4">
            <h4 class="h4">
                Lorem, ipsum dolor.
            </h4>
            <p class="text-left">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quas debitis libero eius ipsum rerum nostrum facere unde. Iure atque, molestias odio, officia vel modi recusandae illo magnam harum deleniti voluptatum minima incidunt expedita quia, quae doloremque sint sequi maxime. Quis architecto temporibus velit aspernatur voluptatum. Laborum sint qui iure mollitia soluta fugiat nulla, cum tempora, quaerat omnis beatae consequatur consequuntur debitis quod aspernatur eligendi sit magnam velit? Optio doloribus magnam dolorem. Quis delectus blanditiis repudiandae quo libero quibusdam exercitationem, assumenda atque veniam magnam totam illum ad, non neque fuga, eos error deleniti porro. Voluptatem suscipit ex vitae laudantium officiis!
            </p>
            <a href="{{asset('submit_docs')}}" class="btn btn-outline-primary cm-background-color w-50" role="button" aria-pressed="true">{{__('app.submit_documents')}}</a>
        </div>
        <div class="col-lg-6 col-md-12 d-flex justify-content-center mb-4">
            <img src="https://s11.stc.all.kpcdn.net/share/i/12/10699928/inx960x640.jpg" class="img-fluid w-75" alt="">
        </div>
    </div>
</div>
<hr class="w-75">
<div class="container-fluid">
    <h4 align="center">Преподавательский состав</h4>
    <p class="text-muted" align="center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, laudantium!
    </p>
    <div id="students" class="carousel slide mt-n4 mb-4" data-ride="carousel">
        <div class="carousel-inner d-flex">
            <div class="carousel-item active">
                <div class="card cm-background-color-gradient">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card cm-background-color-gradient">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card cm-background-color-gradient">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#students" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#students" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="card-columns mb-4">
    <div class="card">
        <img src="https://inde.io/i/galleries/36500/xl_bfc1f6649fe516a2bd53badcaa3d23b1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title that wraps to a new line</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
    <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">
            <small class="text-muted">
            Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
        </footer>
        </blockquote>
    </div>
    <div class="card">
        <img src="https://ic.pics.livejournal.com/ruslanviktorov/71261258/5835181/5835181_900.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card cm-background-color-gradient text-white text-center p-3">
        <blockquote class="blockquote mb-0">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
        <footer class="blockquote-footer text-white">
            <small>
            Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
        </footer>
        </blockquote>
    </div>
    <div class="card text-center">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStB4SGeiT6od_Vn3aAO8uXoHjt2FWyXmyyqXdWqc1AzaM8Zpmf&usqp=CAU" class="card-img-top" alt="...">
    </div>
    <div class="card p-3 text-right">
        <blockquote class="blockquote mb-0">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">
            <small class="text-muted">
            Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
        </footer>
        </blockquote>
    </div>
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
@endsection
