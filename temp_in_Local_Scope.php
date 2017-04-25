<?php
  $temp = "The date is ";
  echo $temp . longdate(time());

  function longdate($timestamp)
  {
    return $temp . date ("l F js Y" , $timestamp);
  }
?>
