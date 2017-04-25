<?php
  function longdate($timestamp)
  {
  return date("l F js Y", $timestamp);
  }
  echo longdate(time() - 17 * 24 * 60 * 60);

?>
