import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



$(document).ready(function(){

    var form = '#add-user-form';

    $(form).on('submit', function(event){
        event.preventDefault();

        var url = $(this).attr('data-action');

        alert(url);

        // $.ajax({
        //     url: url,
        //     method: 'POST',
        //     data: new FormData(this),
        //     dataType: 'JSON',
        //     contentType: false,
        //     cache: false,
        //     processData: false,
        //     success:function(response)
        //     {
        //         $(form).trigger("reset");
        //         alert(response.success)
        //     },
        //     error: function(response) {
        //     }
        // });
    });

});