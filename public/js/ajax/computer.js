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
                            data: "status",
                            render: function( data, type, row, meta ){
                                if (type === 'display'){

                                    switch( data.toString() ){
                                        case "Working":
                                            return "<span class='badge badge-primary'>" + data + "</span>";
                                            break;
                                        case "Broken":
                                            return "<span class='badge badge-warning'>" + data + "</span>";
                                            break;
                                        default:
                                            return "<span class='badge badge-danger'>" + data + "</span>";
                                            break;
                                    }

                                }
                            },
                            defaultContent: "No status defined"
                        },
                        {
                            data: null,
                            render: function( data, type, row, meta ){
                                if( type === 'display'){
                                    return "<div class='toolbox'>" +
                                        "<a href='#' class='toolbox-tool'>" +
                                            "<i class='fa fa-eye'></i></a>" +
                                        "<a href='/computers/"+ data['id'] +"/edit' class='toolbox-tool'>" +
                                            "<i class='fa fa-edit'></i></a>" +
                                        "" +
                                        "<a href='/computers/"+ data['id'] +"/destroy' class='toolbox-tool'>" +
                                            "<i class='fa fa-trash'></i></a>" +
                                        "</div>"

                                }
                            },
                            defaultContent: "Options"
                        }
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

    });

    function parsePeripherals( array ){

    }

})(jQuery);
