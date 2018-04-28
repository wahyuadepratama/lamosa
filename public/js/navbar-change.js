$(document).ready(function(){
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar.navbar-expand-lg.navbar-light.bg-light").css('background-color', 'white');
       } else {
          $(".navbar.navbar-expand-lg.navbar-light.bg-light").css('background-color', 'transparent');
       }
   });
    }
});
