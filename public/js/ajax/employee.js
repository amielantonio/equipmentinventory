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
                        { data: "position" },
                        {
                            data: 'computer_info',
                            render: function( data, type, row, meta){
                            if (type === 'display'){
                                if( data[0] !== undefined){
                                    return "<a href='#' class='color-light text-hover-info' data-toggle='modal' data-target='#specs-modal'>" +
                                        "<i class='fa fa-desktop'></i> "+
                                        data['0']['computer_name'] +
                                        "</a>"
                                }
                            }

                        },
                            defaultContent: "No PC Assigned"
                        },
                        {
                            data: null,
                            render: function( data, type, row, meta ){
                                if( type === 'display'){
                                    return "<div class='toolbox'>" +
                                            "<a href='/employees/"+ data['id'] +"/' class='toolbox-tool'>" +
                                            "<i class='fa fa-eye'></i></a>" +
                                            "" +
                                            "<a href='/employees/"+ data['id'] +"/edit' class='toolbox-tool'>" +
                                                "<i class='fa fa-edit'></i></a>" +
                                            "" +
                                            "<a href='/employees/"+ data['id'] +"/destroy' class='toolbox-tool'>" +
                                                "<i class='fa fa-trash'></i></a>" +
                                        "</div>"

                                }
                            },
                            defaultContent: "Options"
                        }
                    ],
                    columnDefs: [{
                        searchable: false,
                        orderable: false,
                        targets: [0,-1]
                    }],
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
