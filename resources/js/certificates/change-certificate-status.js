$('.certificate-status').on('change',function(){
    console.log('200');
    var id = $(this).data('certificate-id');
    var new_status = $(this).val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'POST',
        url: 'certificates',
        data: {
            'id': id,
            'status': new_status
        },
        success: function(xhr, status, error) {
            $('#certificate-table').load('certificates #certificate-table');
            notice('success', 'Статус справки обновлен');
        },
        error: function(xhr, status, error) {
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
        '<p>'+ text +'</p>' +
        '</div>'
    );
}
