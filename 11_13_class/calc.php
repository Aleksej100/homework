
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

    <form action = "calc.php" >
        <input type="number" name="num_1" placeholder="enter number">
        <input type="number" name="num_2" placeholder="enter number">

        <button type="submint">Submit</button>
    </form>

<?php
    if(isset( $_GET["num_1"] , $_GET["num_2"]))
    {
       $result = $_GET["num_1"] + $_GET["num_2"];

       echo( "<h1> Sum: "  .$result.  "</h1>");
    }
    
?>

</body>
</html>