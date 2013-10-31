<?php
$config = json_decode(@file_get_contents('config.json'), true);
if (!$config) {
  echo "Invalid configuration.";
}
?>
