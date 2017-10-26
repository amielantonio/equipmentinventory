/**
 * Inventory System event handler jQuery
 */


( function ($){

    /**
     * Menu Item Hover Events
     */
    $( function(){
        var menuItem = $('.main-sidebar > li');


        menuItem.hover( function(){
            var sidebarWidth = $('.sidebar-container').width();

            if( $(this).hasClass('has-child')){

                if( $(this).hasClass('active')) return;

                $(this).children('.sub-menu')
                    .toggleClass('show')
                    .css('right', '-'+sidebarWidth);

            }

        });

        /**
         * Frosted Form Control Events
         */

        $( function(){
            var inputForm = $('input[class="fg-form-control"]');
            var resetButton = $("[type='reset']");

            inputForm.each( function(){
                var form = $(this).val();

                if( form !== null){
                    if( form.length > 0 ){
                        $(this).addClass('focus');
                    }
                }
            });

            //Focus Event
            inputForm.on( 'focus', function(){
                $(this).addClass('focus');
            });

            //Blur Event
            inputForm.on( 'blur', function(){
                if( $(this).val()) return;

                $(this).removeClass('focus');
            });

            // for select elements
            $('select.fg-form-control').addClass('focus');


            // RESET BUTTON LISTENER
            resetButton.on( 'click', function(){
                inputForm.each( function(){
                    $(this).removeClass('focus');
                    //for select elements
                    $('select.fg-form-control').addClass('focus');
                });
            });
        });

    });


})(jQuery);