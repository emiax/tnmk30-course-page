<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
   <span class="sr-only">Meny</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="<?php echo $config['rootUrl']; ?>">TNMK30</a>
   </div>
   
   <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
   <?php
 foreach ($config["pages"] as $id => $page) {
   if (isset($_GET["page"]) && $_GET["page"] === $id) {
     echo '<li class="active"><a href="' . $id . '">' . $page["name"] . '</a></li>';
   } else {
     echo '<li class=""><a href="' . $id . '">' . $page["name"] . '</a></li>';
   }
 }
   ?>
   
  
   </ul>
   </div>
</nav>
   