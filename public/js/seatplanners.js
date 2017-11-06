(function ($) {

    var seatPlanPlane = $('#seat-plan-main');

    //setup points for cartesian plane
    // var coordX = ( e.pageX - $(this).offset().left - ( $(this).width() * 0.5 ) );
    // var coordY = -( e.pageY - $(this).offset().top - ( $(this).height() * 0.5 ) );
    // alert(coordX.toFixed(1) + ' , ' + coordY.toFixed(1));





    seatPlanPlane.on( 'click', function( e ){

        var x = e.offsetX;
        var y = e.offsetY;


        // $( this ).append('<div class="workstation" style="top:'+y+'px; left:'+x+'px;"><i class="fa fa-desktop"></i></div>')

    });



})(jQuery);