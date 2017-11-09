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

        $.ajax({
            "url":"/station",
            "method": "GET",
            "dataType": "json",
            success: function( data ){

                var t = table.DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": false,
                    "autoWidth": true,
                    data: data,
                    // columns: [
                    //     { data: null, sortable: false},
                    //     {
                    //         data: null,
                    //         render: function( data, type, row, meta){
                    //             if( type === "display"){
                    //                 return data['employee_resource']['first_name']+" "+data['employee_resource']['last_name']
                    //             }
                    //         },
                    //         defaultContent: "No Employee Assigned"
                    //     },
                    //     {
                    //         data: null,
                    //         render: function( data, type, row, meta ){
                    //             if( type === "display" ){
                    //                 return data['computer_resource']['computer_name']
                    //             }
                    //         }
                    //     },
                    //     { data: "team" },
                    //     { data: "network_type" },
                    //     { data: "ip_address" },
                    //     { data: "mac_address" },
                    //     { data: null }
                    // ],
                    columns: [
                        { data: null, sortable: false},
                        { data: 'employee_resource.first_name' },
                        { data: 'computer_resource.computer_name' },
                        { data: "workstation.team" },
                        { data: "workstation.network_type" },
                        { data: "workstation.ip_address" },
                        { data: "workstation.mac_address" },
                        { data: null }
                    ],
                    columnDefs: [ {
                        searchable: false,
                        orderable: false,
                        targets: [0, -1]
                    } ],
                    order: [[ 1, 'asc' ]]
                });

                t.on( 'order.dt search.dt', function () {
                    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
            }
        });
        // END AJAX



        modal_workstation_fix();
    });

    function modal_workstation_fix(){
        var workstation = $('.workstation');

        workstation.on( 'click', function(){
            var target = $(this).data('target');
            var user = $(this).data('user');

            console.log( user );

            if( user === null || user === undefined || user === ""){
                return;
            }else{
                $( target ).appendTo('body').modal('show');
            }




        });
    }

})(jQuery);
