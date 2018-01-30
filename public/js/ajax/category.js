/**
 * Category Ajax
 */

( function($){


    getelemtnbad

    $(function(){

        var form = $('#category-form');
        var alertable = $('.alert');
        var notif =$('.notification');
        var table = $('#category-table');

        form.find('button.submit').on( "click", function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({

                "url": 'categories',
                "method":'POST',
                "data": form.serialize(),
                success: function( data ){
                    //Show alert
                    notif.css('display', 'block');
                    alertable.find('#message')
                        .html('<span class="color-primary">'+
                            data.category_name +
                            '</span>'+
                            ' added successfully');

                    //Add to Category List
                    table.find('tbody')
                        .append(

                            '<tr class="fadeIn">' +
                            '<td>'+ data.category_name +'</td>' +
                            '<td>'+ data.category_description +'</td>' +
                            '</tr>'
                        );



                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }

            });




        });

    });

})(jQuery);
