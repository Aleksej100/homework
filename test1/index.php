<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
</head>
<body>
    <div class = "container mt-5">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="nav-home" aria-selected="true">Upload</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="gallery.php" role="tab" aria-controls="nav-profile" aria-selected="false">Gallery</a>
            </div>
        </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" text ="alig">

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div>
                Select image to upload:
            </div>

            <div>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div>
                <input type="submit" value="Upload Image" name="submit">
            </div>
        </form>
        
    </div>
    </div>

    </div>
    
    </body>
</html>