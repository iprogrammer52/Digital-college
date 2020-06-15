$('#select_reception_date').on('change', function(){
    console.log('123');
    if ($(this).val() != '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            type: 'HEAD',
            url: 'submit_docs',
            data: {
                'reception_date': $(this).val(),
            },
            success: function(xhr, status, error) {
            },
            error: function(xhr, status, error) {
            }
        });
        $('#reception_time').removeClass('d-none');
    } else {
        $('#reception_time').addClass('d-none');
    }
});
