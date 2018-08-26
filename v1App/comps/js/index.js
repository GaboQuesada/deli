
$(window).resize(function(){     

       if ($('#masterbox').width() >= 1200 ){

            $("#boxmenu").removeClass("container");
         

       }else if ($('#masterbox').width() >= 992 && $('#masterbox').width() <= 1199.98 ){

          $("#boxmenu").removeClass("container");
       

       }else if ($('#masterbox').width() >= 768 && $('#masterbox').width() <= 991.98 ){

          $("#boxmenu").removeClass("container");
         

       }else if ($('#masterbox').width() >= 576 && $('#masterbox').width() <= 767.98 ){

         
         $("#boxmenu").addClass("container");
        

       }else if ($('#masterbox').width() <= 575.98  ){

          
         $("#boxmenu").addClass("container");

       }



});

$(document).ready(function (){
    
     if ($('#masterbox').width() >= 1200 ){

            $("#boxmenu").removeClass("container");
         

       }else if ($('#masterbox').width() >= 992 && $('#masterbox').width() <= 1199.98 ){

          $("#boxmenu").removeClass("container");
       

       }else if ($('#masterbox').width() >= 768 && $('#masterbox').width() <= 991.98 ){

          $("#boxmenu").removeClass("container");
         

       }else if ($('#masterbox').width() >= 576 && $('#masterbox').width() <= 767.98 ){

         
         $("#boxmenu").addClass("container");
        

       }else if ($('#masterbox').width() <= 575.98  ){

          
         $("#boxmenu").addClass("container");

       }
});