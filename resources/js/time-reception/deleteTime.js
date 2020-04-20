$('.deleteReceptionTime').on('click', function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'DELETE',
        url: 'reception_time',
        data: {
            'id': $(this).data('time-reception-id')
        },
        success: function(xhr, status, error) {
        },
        error: function(xhr, status, error) {
        }

    });
});
