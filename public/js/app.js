/**
 * Inventory System event handler jQuery
 */


(function ($) {


    $(function () {

        // Run Apps
        main_menu();
        frosted_form_control();
        form_wizard();
        step_wizard();
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

    /**
     * Step Wizard
     */
    function step_wizard(){
        // Set Variables
        var progressLink = $('.step-progress > li > a');
        var wizardPane = $('.step-wizard-pane');
        var btnNext = $('[data-step-button="next"]');
        var btnPrev = $('[data-step-button="previous"]');

        // Set Default Active
        var target = progressLink.eq( 0 ).attr('href');
        progressLink.eq( 0 ).addClass('active');
        $( target ).addClass('active');

        // Create a Linked List data structure
        var currentLinkIndex = progressLink.index();
        var currentPane = progressLink.eq( currentLinkIndex ).attr('href');


        //Click event for next button
        btnNext.on( 'click', function(){
            var nextLinkIndex = currentLinkIndex + 1;
            var nextPane = progressLink.eq( nextLinkIndex ).attr('href');

            //reset working area
            progressLink.removeClass('active');
            wizardPane.removeClass('active');

            //add finished class to current link
            progressLink.eq( currentLinkIndex ).addClass('finished');

            //Process next active work area
            progressLink.eq( nextLinkIndex ).addClass('active');
            $(nextPane).addClass('active');

            //Set as Current as currentIndex
            currentLinkIndex = nextLinkIndex;
            currentPane = nextPane;

        });

        //Click event for previous button
        btnPrev.on( 'click', function(){
            var prevLinkIndex = currentLinkIndex - 1;
            var prevPane = progressLink.eq( prevLinkIndex ).attr('href');

            //reset working area
            progressLink.removeClass('active');
            wizardPane.removeClass('active');

            //add finished class to current link
            progressLink.eq( currentLinkIndex ).addClass('finished');

            //Process prev active work area
            progressLink.eq( prevLinkIndex ).addClass('active');
            $(prevPane).addClass('active');

            //Set as Current as currentIndex
            currentLinkIndex = prevLinkIndex;
            currentPane = prevPane;
        });


        // On Click event for Progress Link.

        progressLink.on( 'click', function(){
            if( !$(this).hasClass('finished') ){
                return;
            }

            //Add finished to the previous Link
            progressLink.eq( currentLinkIndex ).addClass('finished');

            //reset working area
            progressLink.removeClass('active');
            wizardPane.removeClass('active');

            $(this).addClass('active');
            $( $(this).attr('href') ).addClass('active');

            currentLinkIndex = progressLink.index( this );
            currentPane = progressLink.eq( currentLinkIndex ).attr('href');
        });


    }


})(jQuery);