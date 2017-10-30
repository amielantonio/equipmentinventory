/**
 * Equipment Ajax
 */

( function($){

    $(function(){

        var form = $('#computer-form');
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

                "url": '/computers',
                "method":'POST',
                "data": form.serialize(),
                success: function( data ){
                    console.log(data);
                    //Show alert
                    notif.css('display', 'block');
                    alertable.find('#message')
                        .html('<span class="color-primary">'+data.computer_name+'</span>'
                            + ' was added successfully');
                    //Form Reset
                    // form[0].reset();
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });


        });
        // END FORM

        //Get Equipment resources
        var table = $('#computer-table');

        $.ajax({
            "url":"/computer/get",
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
                    columns: [
                        { data: null, sortable: false},
                        { data: "computer_name" },
                        { data: "computer_parts" },
                        { data: "operating_system" },
                        { data: "os_product_id" },
                        { data: "status" }
                    ],
                    data: data,
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
        // END AJAX

    });

})(jQuery);
