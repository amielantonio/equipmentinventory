/**
 * Inventory System event handler jQuery
 */


( function ($){

    $( function(){
        var menuItem = $('.main-sidebar > li');


        menuItem.on( 'click', function(){

            $(this).toggleClass('active');




        });
    });


})(jQuery);