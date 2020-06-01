function notice(type, text) {
    return $('#notifications_data').append(
        '<div class="alert alert-' + type + ' fade show animated fadeInRight" role="alert">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
        '<span aria-hidden="true">&times;</span>' +
        '</button>' +
        '<p class="alert-heading">' + text + '</p>' +
        '<p>Done</p>' +
        '</div>'
    );
}
