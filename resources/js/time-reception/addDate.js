$('#add-reception-date').on('click', function(){
    console.log($('#reception-date-value').val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type: 'POST',
        cache: false,
        url: 'reception_date',
        data: {
            'date': $('#reception-date-value').val(),
        },
        success: function(xhr, status, error) {
            $('#pills-tab').load('reception_time #pills-tab');
        },
        error: function(xhr, status, error) {
        }
    });
});
