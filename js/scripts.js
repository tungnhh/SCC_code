(function() {
    "use strict";
    // custom scrollbar

    $("html").niceScroll({styler:"fb",cursorcolor:"#68ae00", cursorwidth: '6', cursorborderradius: '10px', background: '#FFFFFF', spacebarenabled:false, cursorborder: '0',  zindex: '1000'});

    $(".scrollbar1").niceScroll({styler:"fb",cursorcolor:"#68ae00", cursorwidth: '6', cursorborderradius: '0',autohidemode: 'false', background: '#FFFFFF', spacebarenabled:false, cursorborder: '0'});

	
	
    $(".scrollbar1").getNiceScroll();
    if ($('body').hasClass('scrollbar1-collapsed')) {
        $(".scrollbar1").getNiceScroll().hide();
    }

    // add - edit - delete:hover
    $( ".add-phone" ).hover(function() {
        $(".add-phone > div").removeClass("animated");
    }, function(){
        $(".add-phone > div").addClass("animated");
    });
    $( ".edit-phone" ).hover(function() {
        $(".edit-phone > div").removeClass("animated");
    }, function(){
        $(".edit-phone > div").addClass("animated");
    });
    $( ".delete-phone" ).hover(function() {
        $(".delete-phone > div").removeClass("animated");
    }, function(){
        $(".delete-phone > div").addClass("animated");
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
/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

//Limit File Update

$(function(){
    $("input[type = 'submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length) > 30){
            alert("You are only allowed to upload a maximum of 30 files");
        }
    });
});
//Delete_Modal
$(document).ready(function(){
    $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });

    $("[data-toggle=tooltip]").tooltip();
});



                     
     
  