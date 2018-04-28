<?php

class script{
  
  function alert_success($title, $content){
    echo '
      <script type="text/javascript">swal("'.$title.'", "'.$content.'", "success")</script>
    ';
  }

  function alert_redirect($title,$content,$path){
    echo '
      <script type="text/javascript">
        swal({
          title: "'.$title.'",
          text: "'.$content.'",
          type: "success",
          showConfirmButton: true
        },
        function(){
          document.location.href="'.$path.'.php'.'";
        });
      </script>
    ';
  }

  function alert_warning($title, $content){
    echo '
      <script type="text/javascript">sweetAlert("'.$title.'", "'.$content.'", "error");</script>
    ';
  }

  function message($title, $content){
    echo '
      <script type="text/javascript">	 swal("'.$title.'", "'.$content.'");</script>
    ';
  }
}

?>
