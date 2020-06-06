$('#add_reception_time').on('click', function() {
    $('#new_reception_time').toggle();
});

$('#save').on('click', function() {
    $('#new_reception_time').toggle();
    $('#progress-bar').fadeIn();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'POST',
        url: 'reception_time',
        data: {
            'reception_date': $('#reception_date').val(),
            'reception_time': $('#reception_time').val(),
            // 'status': $('#status').val(),
        },
        success: function(xhr, status, error) {
            $('#reception_time_content').load('reception_time #reception_time_content');
            // $('#notifications_data').load('reception_time #notifications_data');
            $('#progress-bar').fadeOut();
            notice('success', 'Статус справки обновлен');
            $('#new_reception_time').toggle();
        },
        error: function(xhr, status, error) {
            $('#progress-bar').toggle();
            notice('danger', 'error');
        }

    });
});

// TODO: Убрать функцию, так быть не должно
function notice(type, text) {
    return $('#notifications_data').append(
        '<div class="alert alert-' + type + ' fade show animated fadeInRight" role="alert">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
        '<span aria-hidden="true">&times;</span>' +
        '</button>' +
        '<p>' + text + '</p>' +
        '</div>'
    );
}