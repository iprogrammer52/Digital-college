@extends('layouts.app')

@section('content')  
    <div class="cm-banner cm-banner--fullscreen">
        <img 
            class="cm-image cm-image--fullscreen cm-image--fixed cm-image--blur"
            id="cm-background-image"
            src="https://www.tactfoot.com/wp-content/uploads/2018/09/%D0%B7%D0%B0%D0%B9%D0%BC-%D0%BF%D0%BE%D0%B4-%D0%B7%D0%B0%D0%BB%D0%BE%D0%B3-%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8.jpg" 
            alt="college"
        >
        <div class="cm-infoblock cm-banner__cm-infoblock">
            <h1 class="cm-header cm-banner__cm-header cm-header--light">
                {{__('app.сollege_economics_computer_science')}}
            </h1>
            <p class="cm-text--light">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Dignissimos quasi itaque fugit asperiores eveniet illo id suscipit eos, 
                placeat beatae quisquam quo perferendis ipsum. Recusandae consequatur 
                nulla adipisci nam, dicta quibusdam vitae temporibus suscipit! 
                Sed quos repellendus exercitationem, nemo sapiente dolores officiis 
                accusamus? Iste, voluptas! Quo suscipit modi eligendi odit.
            </p>
            <form 
                action="" 
                method="get"
            >
                @csrf
                <input
                    class="cm-button cm-button--light" 
                    type="button" 
                    value="Подать документы" 
                />
            </form>
        </div>
        <video class="cm-video cm-banner__cm-video" controls>
            <source 
                src="{{asset('video/preroll.mp4')}}" 
                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'
            >
        </video>
    </div>
    <div class="cm-container">
        <div class="cm-infoblock cm-container__cm-infoblock">
            <h2 class="cm-header cm-header--dark">
                Как будет выглядеть твой диплом
            </h2>
            <p class="cm-text cm-text--dark">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Dignissimos quasi itaque fugit asperiores eveniet illo id suscipit eos, 
                placeat beatae quisquam quo perferendis ipsum. Recusandae consequatur 
                nulla adipisci nam, dicta quibusdam vitae temporibus suscipit! 
                Sed quos repellendus exercitationem, nemo sapiente dolores officiis 
                accusamus? Iste, voluptas! Quo suscipit modi eligendi odit.
            </p>
            <form 
                action="" 
                method="get"
            >
                @csrf
                <input
                    class="cm-button cm-button--transparent" 
                    type="button" 
                    value="Подать документы" 
                />
            </form>
        </div>
        <img 
            class="cm-image cm-container__cm-image"
            src="https://www.rea.ru/ru/org/branches/erevan/PublishingImages/Pages/%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC/%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC.png" 
            alt=""
        >
    </div>
    <div class="cm-container cm-container--vertical">
        <div class="cm-infoblock cm-infoblock--center">
            <h2 class="cm-header cm-header--dark">
                НАШИ НАСТАВНИКИ
            </h2>
            <p class="cm-text cm-text--dark">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae consequuntur delectus, porro nobis vero quidem!
            </p>
        </div>
        <div class="cm-imagegroup cm-imagegroup--tile">
            <img 
                src="https://www.avtovzglyad.ru/media/article/BMW_3-Series_2019.jpg.740x555_q85_box-38%2C115%2C1102%2C913_crop_detail_upscale.jpg" 
                alt="" 
                class="cm-image"
            >
        </div>
    </div>
    <div class="cm-banner">
        <div class="cm-infoblock cm-banner__cm-infoblock cm-infoblock--center">
            <h1 class="cm-header cm-header--light">
                Хотите знать о наших новостях ?
            </h1>
            <p class="cm-text cm-text--light">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, harum atque? Ex, architecto est! Unde!
            </p>
            <form 
                action="" 
                method="get"
            >
                @csrf
                <input 
                    class="cm-field-input"
                    type="email" 
                    placeholder="Введите email"
                    required
                />
                <input
                    class="cm-button cm-button--light" 
                    type="submit" 
                    value="Подписаться" 
                />
        </form>
        </div>
    </div>
    <div class="cm-container">
        <form 
            action="" 
            method="get"
        >
            <input
                class="cm-field-input" 
                type="text"
                placeholder="введите ФИО"
            >
            <input 
                class="cm-field-input"
                type="email" 
                name="" 
                id=""
                placeholder="Введите email"
            >
            <br>
            <textarea 
                name="" 
                id="" 
                cols="30" 
                rows="10"
                placeholder="введите ваше обращение"
            ></textarea>
            <br>
            <input 
                class="cm-button cm-button--dark"
                type="submit" 
                value="отправить"
            >
        </form>
        <div class="cm-infoblock cm-container__cm-infoblock cm-infoblock--center">
            <h2 class="cm-header cm-header--dark">
                КОНТАКТЫ
            </h2>
            <p class="cm-text cm-text--dark">Lorem, ipsum dolor.</p>
        </div>
    </div>
@endsection