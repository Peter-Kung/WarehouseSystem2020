<?php
  $filename = $_GET['filename'];
  header('content-disposition: attachment;filename=' . $filename);
  header('content-length: ' . filesize($filename));
  readfile($filename);
 ?>
