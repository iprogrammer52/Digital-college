$('[data-time-reception-id]').change(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'POST',
        url: 'reception_time',
        data: {
            'status': $(this).val(),
            'id': $(this).data('time-reception-id')
        },
        success: function(xhr, status, error) {
            statusOk();
        },
        error: function(xhr, status, error) {
            statusError();
        }

    });
});

function statusOk() {
    return $('#notifications_data').append(
        '<div class="alert alert-success fade show animated fadeInRight" role="alert">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
        '<span aria-hidden="true">&times;</span>' +
        '</button>' +
        '<p class="alert-heading">Well done!</p>' +
        '<p>Done</p>' +
        '</div>'
    );
}

function statusError() {
    return $('#notifications_data').append(
        '<div class="alert alert-danger fade show animated fadeInRight" role="alert">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
        '<span aria-hidden="true">&times;</span>' +
        '</button>' +
        '<p class="alert-heading">Well done!</p>' +
        '<p>Done</p>' +
        '</div>'
    );
}
