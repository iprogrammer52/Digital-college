// $('#add_rt').on('click', function() {
//     $('#reception-time-template').removeClass('d-none');
// });
console.log('awd');

$('#save_rt').on('click', function() {
            console.log($('#time').val(), $('.tab-pane fade active').attr('id'));
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//     });

//     $.ajax({
//         type: 'PUT',
//         cache:false,
//         url: 'reception_time',
//         data: {
//             'time': $('#time').val(),
//             'reception_date_id':$('.tab-pane fade active').attr('id'),
//         },
//         success: function(xhr, status, error) {
//             $('#reception-times-table').load('reception_time #reception-times-table');
//             statusOk();
//         },
//         error: function(xhr, status, error) {
//             statusError();
//         }

//     });
});

// function statusOk() {
//     return $('#notifications_data').append(
//         '<div class="alert alert-success fade show animated fadeInRight" role="alert">' +
//         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
//         '<span aria-hidden="true">&times;</span>' +
//         '</button>' +
//         '<p class="alert-heading">Well done!</p>' +
//         '<p>Done</p>' +
//         '</div>'
//     );
// }

// function statusError() {
//     return $('#notifications_data').append(
//         '<div class="alert alert-danger fade show animated fadeInRight" role="alert">' +
//         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
//         '<span aria-hidden="true">&times;</span>' +
//         '</button>' +
//         '<p class="alert-heading">Well done!</p>' +
//         '<p>Done</p>' +
//         '</div>'
//     );
// }
