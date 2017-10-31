/**
 * Inventory System event handler jQuery
 */


(function ($) {


    $(function () {

        // Run Apps
        main_menu();
        frosted_form_control();
        form_wizard();
    });

    /**
     * Menu Item Hover Events
     */
    function main_menu() {
        var menuItem = $('.main-sidebar > li');


        menuItem.on( 'mouseenter', function(){

            if( $(this).hasClass( 'has-child' )){
                if( $(this).hasClass('show')){
                    return;
                }else{
                    $(this).children('.sub-menu')
                        .addClass('showMenu');
                }
            }

        });

        menuItem.on( 'mouseleave', function(){

            if( $(this).children('.sub-menu').hasClass('showMenu')){
                $(this).children('.sub-menu')
                    .removeClass('showMenu');
            }

        });

    }


    /**
     * Frosted Form Control Events
     */
    function frosted_form_control() {
        var inputForm = $('input[class="fg-form-control"]');
        var resetButton = $("[type='reset']");

        inputForm.each(function () {
            var form = $(this).val();

            if (form !== null) {
                if (form.length > 0) {
                    $(this).addClass('focus');
                }
            }
        });

        //Focus Event
        inputForm.on('focus', function () {
            $(this).addClass('focus');
        });

        //Blur Event
        inputForm.on('blur', function () {
            if ($(this).val()) return;

            $(this).removeClass('focus');
        });

        // for select elements
        var selectBox = $('select.fg-form-control');

        selectBox.each( function(){

            if( $(this).children('option').length > 0 ){
                $(this).addClass('focus');
            }

        });

        // RESET BUTTON LISTENER
        resetButton.on('click', function () {
            inputForm.each(function () {
                $(this).removeClass('focus');

                //for select elements
                selectBox.each( function(){

                    if( $(this).children('option').length > 0 ){
                        $(this).addClass('focus');
                    }

                });
            });
        });
    }


    /**
     * Function for Form
     */

    function form_wizard(){
        var mainLink = $('.sidebar > li > a');

        mainLink.on( 'click', function(e){

            $(this).next('.sub-menu').toggleClass('show');

        });

    }


})(jQuery);