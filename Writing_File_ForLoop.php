<?php
  $fp = fopen("text.txt", 'wb');

  for ($j = 0 ; $j < 100 ; ++$j)
  {
    $wwritten = fwrite($fp, "data");
    if ($written == FALSE) break;
  }
  fclose($fp);
?>  
