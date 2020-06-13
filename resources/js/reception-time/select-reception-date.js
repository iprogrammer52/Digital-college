$('#select_reception_date').on('change', function(){
    if ($(this).val() != '') {
        $('#reception_time').removeClass('d-none');
    } else {
        $('#reception_time').addClass('d-none');
    }
});
