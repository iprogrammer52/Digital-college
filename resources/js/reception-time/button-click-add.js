$('#add_reception_time').on('click', function(){
    $('#new_reception_time').toggle();
});

$('#save').on('click', function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });
    $.ajax({
        url: 'reception_time',
        type: 'POST',
        success: function(html){
            $("#notifications_data").html(html);
        },
    });
});
