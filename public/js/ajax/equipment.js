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
                            + ' added successfully');
                    //Form Reset
                    // form[0].reset();
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });


        });

    });

})(jQuery);