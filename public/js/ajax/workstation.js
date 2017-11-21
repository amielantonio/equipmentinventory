/**
 * Workstation JS
 */

( function($){


    //On load apps
    $( function(){

        modal_workstation_fix();

    });

    //Workstation Ajax
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


        table.DataTable({
            'ajax': '/station',
            'columns': [
                {
                    data: null,
                    render: function( data, type, row, meta){
                        if( type === 'display'){
                            return data['workstation']['id'];
                        }
                    },
                    defaultContent: "#"

                },
                {
                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            if( data['employee_resources'] === null || data['employee_resources'] === 'undefined' ){

                                return "No User";

                            }else{

                                return data['employee_resources']['first_name']+" "+ data['employee_resources']['last_name'];

                            }
                        }

                    },
                    defaultContent: "No User"
                },
                {
                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            if( data['computer_resources'] === null || data['computer_resources'] === 'undefined' ){
                                return "No User";
                            }else{
                                return data['computer_resources']['computer_name'];
                            }
                        }

                    },
                    defaultContent: "No User"
                },
                {
                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            if( data['workstation'] === null || data['workstation'] === 'undefined' ){
                                return "No Team";
                            }else{
                                return data['workstation']['team'];
                            }
                        }
                    },
                    defaultContent: "No User"
                },
                {

                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            return data['workstation']['network_type'];
                        }
                    },
                    defaultContent: "No plugged network"
                },
                {
                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            if( data['workstation'] === null || data['workstation'] === 'undefined' ){
                                return "No Team";
                            }else{
                                return data['workstation']['ip_address'];
                            }
                        }
                    },
                    defaultContent: "No IP address"
                },
                {
                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            if( data['workstation'] === null || data['workstation'] === 'undefined' ){
                                return "No Team";
                            }else{
                                return data['workstation']['mac_address'];
                            }
                        }
                    },
                    defaultContent: "No MAC address"
                },
                {
                    data: null,
                    render: function( data, type, row, meta){

                        if( type === 'display'){
                            return "<div class='toolbox'>" +
                                "<a href='#' class='toolbox-tool'>" +
                                "<i class='fa fa-eye'></i></a>" +
                                "</div>"

                        }
                    },
                    defaultContent: "No IP"
                }
            ]
        });
        // END AJAX

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
