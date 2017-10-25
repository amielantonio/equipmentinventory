/**
 * Equipment Ajax
 */

( function($){

    $(function(){

        var form = $('#equipment-form');

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
                success: function(){
                    console.log('success');
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });


        });

    });

})(jQuery);
