let dropArea = $('#cm-js-imageuploader-click')[0];

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

$('#cm-js-imageuploader-click').on('change', function() {
    handleFiles($('#fileElem').prop('files'));
});

function handleFiles(files) {
    files = [...files];
    console.log(files);
    // initializeProgress(files.length);
    // files.forEach(uploadFile);
    files.forEach(previewFile);
}

// подстветка
// ['dragenter', 'dragover'].forEach(eventName => {
//     dropArea.addEventListener(eventName, highlight, false);
// });

// ['dragleave', 'drop'].forEach(eventName => {
//     dropArea.addEventListener(eventName, unhighlight, false);
// })

// function highlight(e) {
//     dropArea.addClass('highlight');
// }

// function unhighlight(e) {
//     dropArea.classList.remove('highlight');
// }

dropArea.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    let dt = e.dataTransfer;
    let files = dt.files;

    handleFiles(files);
}

// function uploadFile(file) {
//     let url = '/add_news';
//     let formData = new FormData();
//     formData.append('file', file);
//     fetch(url, {
//             method: 'POST',
//             body: formData
//         })
//         .then((progressDone) => { /* Готово. Информируем пользователя */ })
//         .catch(() => { /* Ошибка. Информируем пользователя */ });
// }

function previewFile(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function() {
        let img = document.createElement('img');
        img.src = reader.result;
        document.getElementById('cm-imageuploader-wrapper__uploaded-id').appendChild(img);
    }
}

let filesDone = 0;
let filesToDo = 0;
let progressBar = document.getElementById('progress-bar');

function initializeProgress(numfiles) {
    progressBar.value = 0;
    filesDone = 0;
    filesToDo = numfiles;
}

function progressDone() {
    filesDone++;
    progressBar.value = filesDone / filesToDo * 100;
}