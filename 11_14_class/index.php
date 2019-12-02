<?php
session_start();
require('next.php');
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
  <form action = "next.php" method="POST">
        <input type="number" name="num_1" placeholder="enter number">
        <input type="number" name="num_2" placeholder="enter number">
        <input type="text" name="num_3" placeholder="enter number">
        <button type="submint">Submit</button>
        

  </form>

</body>
</html>


