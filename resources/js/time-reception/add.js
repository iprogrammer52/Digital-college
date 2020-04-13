$('#add_rt').on('click', function() {
    $('#reception-time-template').removeClass('d-none');
});

$('#save_rt').on('click', function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'PUT',
        url: 'reception_time',
        data: {},
        success: function(xhr, status, error) {},
        error: function(xhr, status, error) {}

    });
});