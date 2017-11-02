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
                        { data: "computer_name" },
                        {
                            data: null,
                            render: function( data, type, row, meta){
                                if( type === 'display'){
                                    return "<a href='#' class='color-light' data-toggle='modal' data-target='#os-modal' data-source='"+
                                         data['product_id'] +"'>" +
                                        " <span class='badge badge-primary mr-10'><i class='fa fa-key'></i></span> "+
                                        data['operating_system'] +"<br />" +
                                        "</a>";
                                }
                            },
                            defaultContent: "No OS installed"
                        },
                        {
                            data: null,
                            render: function( data, type, row, meta ){
                                if( type === 'display'){
                                    return "<a href='#' class='color-light' data-toggle='modal' data-target='#specs-modal'>" +
                                        "<i class='fa fa-microchip mr-10'></i> View" +
                                        "</a>";
                                }
                            },
                            defaultContent: "No Specs indicated"
                        },
                        {
                            data: null,
                            render: function( data, type, row, meta ){
                                if( type === 'display'){
                                    return "<a href='#' class='color-light' data-toggle='modal' data-target='#peripherals-modal'>" +
                                        "<i class='fa fa-keyboard-o mr-10'></i> View" +
                                        "</a>";
                                }
                            },
                            defaultContent: "No Peripherals Used"
                        },
                        {
                            data: "status",
                            render: function( data, type, row, meta ){
                                if (type === 'display'){

                                    if( data == "Working" ){
                                        return "<span class='badge badge-primary'>" + data + "</span>"
                                    }else{
                                        return "<span class='badge badge-warning'>" + data + "</span>"
                                    }


                                }
                            },
                            defaultContent: "No status defined"
                        },
                        { data: "employee_id" }
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
        // END AJAX

    });

    function parsePeripherals( array ){

    }

})(jQuery);
