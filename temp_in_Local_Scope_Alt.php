<?php
  $temp = "The date is ";
  echo longdate($temp, time());

  function longdate($text, $timestamp)
  {
    return $text . date ("l F js Y" , $timestamp);
  }
?>
