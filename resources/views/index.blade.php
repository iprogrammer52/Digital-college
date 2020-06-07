@extends('layouts/app')

@section('content')
<div id="carouselExampleControls" class="carousel slide mt-n4 mb-4 d-none d-md-block" data-ride="carousel">
    <div class="carousel-inner d-flex">
        <div class="carousel-item active">
            <img src="https://img-fotki.yandex.ru/get/15489/39663434.6fb/0_a1fb0_74c45d2e_XL.jpg" class="d-block w-100 cm-image-wrapper" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cat-cat-cat.ru/photo/2015/01/MG_3876-.jpg" class="d-block w-100 cm-image-wrapper" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://lookw.ru/8/855/1476177249-panoramic-wallpapers-1.jpg" class="d-block w-100 cm-image-wrapper" alt="...">
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
        <div class="col-lg-6 col-md-12 d-flex justify-content-center flex-column mb-4">
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
    <h5 align="center">Наши настравники</h5>
    <p align="center" class="text-muted">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, sunt.
    </p>
</div>
@endsection
