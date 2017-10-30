/**
 * Equipment Ajax
 */

( function($){

    $(function(){

        var form = $('#equipment-form');
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

                "url": '/equipment',
                "method":'POST',
                "data": form.serialize(),
                success: function( data ){
                    console.log(data);
                    //Show alert
                    notif.css('display', 'block');
                    alertable.find('#message')
                        .html('<span class="color-primary">'+data.equipment_name+'</span>'
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
        var table = $('#equipment-table');

        $.ajax({
            "url":"equipments/get",
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
                        { data: "equipment_name" },
                        { data: "category" },
                        { data: "price" },
                        { data: "durability" },
                        { data: "on_hand" },
                        { data: "info" }
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
