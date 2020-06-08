$('.reception-time-status').change(function() {
    console.log($('#' + $(this).attr('id')).val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'PUT',
        url: 'reception_time',
        data: {
            'status': $('#' + $(this).attr('id')).val(),
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

// // TODO: Убрать функцию, так быть не должно
// function notice(type, text) {
//     return $('#notifications_data').append(
//         '<div class="alert alert-' + type + ' fade show animated fadeInRight" role="alert">' +
//         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
//         '<span aria-hidden="true">&times;</span>' +
//         '</button>' +
//         '<p>' + text + '</p>' +
//         '</div>'
//     );
// }
