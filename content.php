<section id="content">
   
<?php
   
$id = isset($_GET["page"]) ? $_GET["page"] : "404";
$fileId = isset($config["pages"][$id]) ? $id : 'index';
$contents = @file_get_contents('pages/' . $fileId. '.html');

if ($contents) {
  echo $contents;
} else {
  include "pages/404.html";
}

?>

</section>