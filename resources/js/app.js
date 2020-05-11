// require from node_module
require('./bootstrap');
require('../../node_modules/dots/index');
// require('../../node_modules/croppie/croppie.min.js');

// custom script
require('./cm-js-open-menu');
require('./imageuploader');
require('./sidebar');
require('./cm-vertical-carusel');

// reception time scrits
// require('./time-reception/changeTime');
// require('./time-reception/addTime');
// require('./time-reception/deleteTime');
// require('./time-reception/addDate');
require('./time-reception/change-date');

//service worker for PWA
require('./service-worker');