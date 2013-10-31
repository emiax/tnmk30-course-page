<section id="content">
   
<?php
   
$id = isset($_GET["page"]) ? $_GET["page"] : "404";
$fileId = isset($config["pages"][$id]) ? $id : 'index';
$contents = @file_get_contents($fileId. '.html');

if ($contents) {
  echo $contents;
} else {
  include "404.html";
}

?>

</section>