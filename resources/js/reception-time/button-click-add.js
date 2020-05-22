$('#add_reception_time').on('click', function(){
    if ($('#add_reception_time').val() == '+') {
        $('#add-reception-time-form').removeClass('d-none');
        $('#add_reception_time').val('-');
    } else if($('#add_reception_time').val() == '-') {
        $('#add-reception-time-form').addClass('d-none');
        $('#add_reception_time').val('+');
    }
});
