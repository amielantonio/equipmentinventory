/**
 * Workstation Ajax
 */

( function($){

    $(function(){

        var form = $('#workstation-form');
        var alertable = $('.alert');
        var notif =$('.notification');

        form.find('button.submit').on( "click", function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({

                "url": '/workstation',
                "method":'POST',
                "data": form.serialize(),
                success: function( data ){
                    console.log(data);
                    //Show alert
                    notif.css('display', 'block');
                    alertable.find('#message')
                        .html('New Workstation added successfully');
                    //Form Reset
                    // form[0].reset();s
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });


        });
        // END FORM

        //Get Equipment resources
        var table = $('#workstation-table');

        // $.ajax({
        //     "url":"/workstations/get",
        //     "method": "GET",
        //     "dataType": "json",
        //     success: function( data ){
        //
        //         var t = table.DataTable({
        //             "paging": true,
        //             "lengthChange": false,
        //             "searching": true,
        //             "ordering": true,
        //             "info": false,
        //             "autoWidth": true,
        //             columns: [
        //                 { data: null, sortable: false},
        //                 { data: "employee_id" },
        //                 { data: "computer_id" },
        //                 { data: "location" },
        //                 { data: "network_type" },
        //                 { data: "ip_address" },
        //                 { data: "mac_address" },
        //                 { data: null }
        //             ],
        //             data: data,
        //             columnDefs: [ {
        //                 searchable: false,
        //                 orderable: false,
        //                 targets: 0
        //             } ],
        //             order: [[ 1, 'asc' ]]
        //         });
        //
        //         t.on( 'order.dt search.dt', function () {
        //             t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        //                 cell.innerHTML = i+1;
        //             } );
        //         } ).draw();
        //     }
        // });
        // END AJAX



        seat_plan();
    });

    function seat_plan(){
        var workstation = $('.workstation');
        var employee_name = $('#employee_name');
        var computer_name = $('#computer_name');

        workstation.on( 'click', function(){

            var id = $( this ).data('workstation-id');
            console.log( id );


            $.ajax({
                url:'/workstation/' + id,
                method: 'GET',
                dataType: 'json'
            }).done( function( data ){

                // var employee = $.ajax({
                //     url: '/employees/' + data.employee_id,
                //     method: 'GET',
                //     dataType: 'json',
                //     success: function( data ){
                //         return data;
                //     }
                // });
                //
                // var computer = $.ajax({
                //     url: '/computers/' + data.computer_id,
                //     method: 'GET',
                //     dataType: 'json',
                //     success: function( data ){
                //         return data;
                //     }
                // });
                //
                // employee.done( function( data ) {
                //     employee_name.html(data.first_name + " " + data.last_name);
                // });
                //
                // computer.done( function( data ){
                //     computer_name.html( data.computer_name );
                // });




                $('#workstation-information').modal({
                    backdrop: false,
                    show: true
                });
            })

        });// Workstation on click


        $('#workstation-information').on( 'hidden.bs.modal', function(){
            computer_name.html('');
            employee_name.html('');
        });

    }

})(jQuery);
