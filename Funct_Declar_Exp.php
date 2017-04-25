<?php
  function longdate($timestamp)
  {
    $temp = date("l F js Y", $timestamp);
    return "The date is $temp";
  }
  ?>
