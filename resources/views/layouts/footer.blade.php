<div class="footer">
  <center>
  <small>Copyright &copy; 2018 By Lamosa Team. All Rights Reserved.</small>
  </center>
</div>

<script type="text/javascript">
$(document).ready(function(){
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $("bg-light").css('background-color', 'pink !important');
       } else {
          $("bg-light").css('background-color', 'white');
       }
   });
    }
});
</script>
