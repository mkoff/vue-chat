<?php
  $fd = fopen("api", 'w');
  fwrite($fd, file_get_contents("php://input"));
  fclose($fd);
?>