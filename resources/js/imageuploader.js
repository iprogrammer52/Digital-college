let dropArea = document.getElementByClass('.cm-imageuploader-wrapper__loader');

// $('#cm-js-imageuploader-click').on('click', function() {
// });

// ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
//     dropArea.addEventListener(eventName, preventDefaults, false)
//   })
//   function preventDefaults (e) {
//     e.preventDefault()
//     e.stopPropagation()
//   }

//   ;['dragenter', 'dragover'].forEach(eventName => {
//     dropArea.addEventListener(eventName, highlight, false)
//   })
//   ;['dragleave', 'drop'].forEach(eventName => {
//     dropArea.addEventListener(eventName, unhighlight, false)
//   })
//   function highlight(e) {
//     dropArea.classList.add('highlight')
//   }
//   function unhighlight(e) {
//     dropArea.classList.remove('highlight')
//   }

//   dropArea.addEventListener('drop', handleDrop, false)
// function handleDrop(e) {
//   let dt = e.dataTransfer
//   let files = dt.files
//   handleFiles(files)
// }

// function handleFiles(files) {
//     files = [...files]
//     initializeProgress(files.length) // <- Добавили эту строку
//     files.forEach(uploadFile)
//     files.forEach(previewFile)
//   }
//   function uploadFile(file) {
//     let url = 'ВАШ URL ДЛЯ ЗАГРУЗКИ ФАЙЛОВ'
//     let formData = new FormData()
//     formData.append('file', file)
//     fetch(url, {
//       method: 'POST',
//       body: formData
//     })
//     .then(progressDone) // <- Добавим вызов `progressDone` здесь
//     .catch(() => { /* Ошибка. Сообщаем пользователю */ })
//   }
// function previewFile(file) {
//     let reader = new FileReader()
//     reader.readAsDataURL(file)
//     reader.onloadend = function() {
//       let img = document.createElement('img')
//       img.src = reader.result
//       document.getElementById('gallery').appendChild(img)
//     }
//   }





//   let filesDone = 0
// let filesToDo = 0
// let progressBar = document.getElementById('progress-bar')


// function initializeProgress(numfiles) {
//     progressBar.value = 0
//     filesDone = 0
//     filesToDo = numfiles
//   }
//   function progressDone() {
//     filesDone++
//     progressBar.value = filesDone / filesToDo * 100
//   }
