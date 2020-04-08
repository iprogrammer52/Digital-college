$('[data-time-reception-id]').change(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    $.ajax({
        type:'POST',
        url:'reception_time',
        data: {
            'status':$(this).val(),
            'id':$(this).data('time-reception-id')
        },
    });
});
