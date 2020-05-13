<div class="cm-imageuploader-wrapper">
    <div class="cm-imageuploader-wrapper__loader" id="cm-js-imageuploader-click">
        <p class="cm-imageuploader-wrapper__info">{{__('app.drag_and_drop_the_file')}}</p>
        <label class="cm-imageuploader-wrapper__select-file-button" for="fileElem">
            <img src="{{ asset('icons/cloud-upload.svg') }}" alt="">
        </label>
        <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
    </div>
    <div class="cm-imageuploader-wrapper__uploaded">
    </div>
</div>
{{-- <div id="drop-area">
    <form class="my-form">
        <p>Загрузите изображения с помощью диалога выбора файлов или перетащив нужные изображения в выделенную область</p>
        <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
        <label class="button" for="fileElem">Выбрать изображения</label>
    </form>
    <progress id="progress-bar" max=100 value=0></progress>
    <div id="gallery"></div>
</div> --}}
