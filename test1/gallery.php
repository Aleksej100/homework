<?php
// READ FILES FROM THE GALLERY FOLDER
$dir = __DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,gif,png}", GLOB_BRACE);

// DRAW HTML ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="gallery.css" rel="stylesheet">
  
  </head>
  <body>
<div class = "container mt-5">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="nav-home" aria-selected="true">Upload</a>
    <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="gallery.php" role="tab" aria-controls="nav-profile" aria-selected="false">Gallery</a>

  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <!-- [THE GALLERY] -->
    <div id="gallery" >
    <?php
    foreach ($images as $i) 
    {
      printf("<img src='upload/%s'/ >", basename($i));
    }
    ?>
    </div>

</div>
 </body>
</html>