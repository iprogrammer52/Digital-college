<div class="cm-imageuploader-wrapper">
    <div class="cm-imageuploader-wrapper__loader" id="cm-js-imageuploader-click">
        <p class="cm-imageuploader-wrapper__info">{{__('app.drag_and_drop_the_file')}}</p>
        <label class="cm-imageuploader-wrapper__select-file-button" for="fileElem">
            <img src="{{ asset('icons/cloud-upload.svg') }}" alt="">
        </label>
        <input type="file" id="fileElem" accept="image/*" name="images[]" multiple>
        <div class="progress">
        </div>
    </div>
    <div class="cm-imageuploader-wrapper__uploaded" id="cm-imageuploader-wrapper__uploaded-id">
    </div>
</div>
