(function() {
    "use strict";
    // custom scrollbar

    $("html").niceScroll({styler:"fb",cursorcolor:"#68ae00", cursorwidth: '6', cursorborderradius: '10px', background: '#FFFFFF', spacebarenabled:false, cursorborder: '0',  zindex: '1000'});

    $(".scrollbar1").niceScroll({styler:"fb",cursorcolor:"#68ae00", cursorwidth: '6', cursorborderradius: '0',autohidemode: 'false', background: '#FFFFFF', spacebarenabled:false, cursorborder: '0'});

	
	
    $(".scrollbar1").getNiceScroll();
    if ($('body').hasClass('scrollbar1-collapsed')) {
        $(".scrollbar1").getNiceScroll().hide();
    }

    // test
    $("#form-uploads").hide();
    $( ".add-phone" ).hover(function() {
        $(".add-phone > div").removeClass("animated");
        $("#form-uploads").show(3000);
    }, function(){
        $(".add-phone > div").addClass("animated");
    });

})(jQuery)
$(document).ready(function(){
    $('#upload').click(function(){

        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        // AJAX request
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    // Show image preview
                    $('#preview').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
                }else{
                    alert('file not uploaded');
                }
            }
        });
    });
});





                     
     
  