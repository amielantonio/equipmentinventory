/**
 * Diagnostics JS
 */


( function($){

    //Move the Computer field to hidden field

    $( function(){
        var modal = $('a[data-toggle="modal"]');
        var computerID = $('p[data-computer]');
        var hiddenField = $('#diagnostics-form').find( 'input[type="hidden"]' );

        modal.on( 'click', function(){
            hiddenField.val( computerID.data('computer') );
        });
    });

    // AJAX

    $( function(){

        var form = $('#diagnostics-form');

        form.find('button.submit').on( 'click', function( e ){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                "url": '/diagnostics',
                "method":'POST',
                "data": form.serialize(),
                success: function( data ){

                    $('.diagnostics-list')
                        .append("<li class=\"diagnostics\">" +
                            "<div class=\"row\">" +
                            "<div class=\"col-sm-2\">" +
                            "<p><span class=\"color-info\">Title:</span></p>" +
                            " <p><span class=\"color-info\">Description:</span></p>" +
                            "<p><span class=\"color-info\">Date:</span></p></div>" +
                            "<div class=\"col-sm-10\">" +
                            "<p>"+data.diagnostics_title+"</p>" +
                            "<p>"+data.diagnostics_text+"</p>" +
                            "<p>"+ moment(date.diagnostics_date, 'YYYY-MM-DD').fromNow() +"</p></div>" +
                            "</div></li>");

                }
            });

        });



    });

})(jQuery);