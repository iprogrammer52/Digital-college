@extends('layouts.app')

@section('content')  
<video 
    class="video-background" 
    autoplay 
    loop 
    muted 
    plays-inline
>
    <source 
        src="https://r7---sn-n8v7kn7k.googlevideo.com/videoplayback?expire=1580927316&ei=9LQ6Xpa9JoWnyAXPhYWYAg&ip=31.41.108.5&id=o-AO99gDWmwNWmYmgJFzfVkeSGTSBrL_nRhLGr4b_YzlBM&itag=137&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&vprv=1&mime=video%2Fmp4&gir=yes&clen=12172019&otfp=1&dur=55.000&lmt=1563277240226478&fvip=7&keepalive=yes&fexp=9466588,23842630&beids=9466588&c=WEB&txp=2216222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRAIgJ8jcwZrVv98UBwZwAlQTHAAdFs-1fyWMDjX_Z2A1aF8CIH4h7SKTR0nYQAxSbK8b0ZPVkTcll_nVACdvgrjxEPkK&video_id=3B9vOYbcuWE&title=%D0%98%D0%BC%D0%B8%D0%B4%D0%B6%D0%B5%D0%B2%D1%8B%D0%B9+3D-%D1%80%D0%BE%D0%BB%D0%B8%D0%BA+%D0%B4%D0%BB%D1%8F+%D1%81%D1%82%D1%83%D0%B4%D0%B8%D0%B8+%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%D0%B0+%D0%B8+%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D1%8B+Aulet&rm=sn-pm2hxnigvvh-v1ie7l,sn-3c2l7ee&req_id=fb661f9b08a6a3ee&ipbypass=yes&redirect_counter=3&cm2rm=sn-gvnuxaxjvh-bvws7z&cms_redirect=yes&mip=176.116.138.167&mm=30&mn=sn-n8v7kn7k&ms=nxu&mt=1580905646&mv=m&mvi=6&pl=21&lsparams=ipbypass,mip,mm,mn,ms,mv,mvi,pl&lsig=AHylml4wRQIgfnJCzXj9N4PGs-_LZRpkJWUArSnemOrPXvjEFBGBKMgCIQDCTG_yL-3J3Axe-S3kas1LAE22OCe81dVymQkkKGIMOg%3D%3D" 
        type="video/mp4"
    >
</video>
<div class="cm-info cm-info--horizaontal">
    <div class="text">
        <h1>Как будет выглядеть твой диплом</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero qui, perferendis officia quod commodi exercitationem pariatur. Ipsum aperiam ipsam ab consectetur dolore error ratione, similique adipisci voluptatem quae porro obcaecati animi soluta illum ut expedita et placeat quis saepe odit! Eum hic cum nulla explicabo, in tempora ullam reprehenderit quos repudiandae optio. Asperiores nostrum explicabo dolor beatae excepturi voluptas, aperiam incidunt, sunt, autem illo eveniet recusandae minima. Labore debitis distinctio quasi odio repudiandae sit modi pariatur tempora aliquid excepturi, officiis quas minus enim et ut sequi voluptate necessitatibus autem eos vel culpa. Dolor sed ad quasi magnam nam excepturi fuga?
        </p>
        <form action="">
            @csrf
            <input type="button" value="Подать документы">
        </form>
    </div>
    <div class="img">
        <img 
            src="https://www.rea.ru/ru/org/branches/erevan/PublishingImages/Pages/%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC/%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC.png" 
            alt="диплом"
        >
    </div>
</div>
<hr />
<div class="cm-info cm-info--vertical">
    <h1>НАШИ НАСТАВНИКИ</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, nulla.
    </p>
    <hr />
    <div class="cards">
        <div class="card" id="card-1"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-2"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-3"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-4"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-5"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-6"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-7"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
        <div class="card" id="card-8"><img src="https://i.pinimg.com/originals/a3/b2/a1/a3b2a15f6e72af1af06c103811959abb.jpg" width="25px" height="25px"></div>
    </div>
    <div class="pr">
        <div class="info">
            <h1>ТОЛЬКО ТОПОВЫЕ ПРОФЕССИИ</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, natus dolorem modi blanditiis ab fuga ex saepe voluptate, asperiores veniam, temporibus vel assumenda! Velit, quaerat?
            </p>    
            <hr />
        </div>        
        <div class="card-list">        
        awdawefklgrdtbjs;
        </div>
    </div>
    <div class="contacts">
        <h1>efsrgdtnftdhgrsfea</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nobis earum recusandae veniam rerum saepe praesentium! Corrupti tenetur voluptatem debitis! Optio libero, quam numquam possimus odit atque alias quibusdam esse, quisquam accusantium excepturi ullam deleniti cumque. Delectus deserunt, iusto vel harum dolores ullam perferendis ducimus reprehenderit corrupti! Aut accusantium repellat repudiandae sunt! Deleniti incidunt necessitatibus culpa fugiat voluptate doloribus reprehenderit rerum?</p>
        <form action="">
            @csrf
            <input type="text" name="" id="">
            <input type="email" name="" id="">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="button" value="">
        </form>        
        <div class="contacts-info">
            <p>awdawd
                awdawawd
            </p>
        </div>
    </div>
    <footer>
        &copy Разработал <a href="https://www.vk.com/programmerivan">Иван Балашов</a> в <?php echo(date('d:m:Y')) ?>
    </footer>
</div>
    @endsection
