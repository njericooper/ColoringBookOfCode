<?php
  static $int = 0; // allowed
  static $int = 1+2; // Disallowed (will produce a Parse error)
  static $int = sqrt(144); // Disallowed
?>
