let dropArea = $('#cm-js-imageuploader-click')[0];

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
});

function preventDefaults(e) {
    e.preventDefault()
    e.stopPropagation()
}

['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false);
});

['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false);
})

function highlight(e) {
    dropArea.addClass('highlight');
}

function unhighlight(e) {
    dropArea.classList.remove('highlight');
}