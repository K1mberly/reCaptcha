$(document).ready(function(){
    $(".dropdown").click(function() {
      if($(".dropdown").attr("value")==="close"){
         $(".dropdown").attr("value", "open");
         $(".dropdown-content").css("display","block");
      }
      else {
         $(".dropdown").attr("value", "close");
         $(".dropdown-content").css("display","none");
      }
    })
    $(".toggle-sidebar").click(function(){
      if($("#wrapper").attr("value")==="close"){
         $("#wrapper").attr("value", "open");
         $("#wrapper").css("display","block");
         $(".home-content").css("padding-left","210px");

      }
      else {
         $("#wrapper").attr("value", "close");
         $("#wrapper").css("display","none");
         $(".home-content").css("padding-left","30px");
      }
    })
})
