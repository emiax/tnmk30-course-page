<?php 
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
include "config.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>TNMK30 Kurshemsida</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/prettify.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    <?php
  include "navigation.php";
  include "content.php";
    ?>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/prettify/prettify.js"></script>
    <script type="text/javascript">prettyPrint();</script>
  </body>
</html>
