/**
 * Equipment Ajax
 */

( function($){

    $(function(){

        var form = $('#employee-form');
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

                "url": '/employees',
                "method":'POST',
                "data": form.serialize(),
                success: function( data ){
                    console.log(data);
                    //Show alert
                    notif.css('display', 'block');
                    alertable.find('#message')
                        .html('<span class="color-primary">'+
                            data.first_name+ " "+ data.last_name +
                            '</span>'+
                            ' added successfully');
                    //Form Reset
                    // form[0].reset();
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });


        });

        //Get Employee resources
        var table = $('#employee-table');

        $.ajax({
            "url":"/employee/get",
            "method": "GET",
            "dataType": "json",
            success: function( data ){

                console.log( data );
                var t = table.DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": false,
                    "autoWidth": true,
                    data: data,
                    columns: [
                        { data: null, sortable: false},
                        { data: "first_name"},
                        { data: "last_name"},
                        { data: "email" },
                        { data: "contact" },
                        { data: "position" }
                    ],
                    columnDefs: [ {
                        searchable: false,
                        orderable: false,
                        targets: 0
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

    });

})(jQuery);
