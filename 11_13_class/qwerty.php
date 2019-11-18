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
  <h3>Please login to continue.</h3>
<form action= "qwerty.php" method = "post">
    <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
 </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>

  <button type="submit" class="btn btn-primary" name = "but">Submit</button>
</form>

<?php   
    if(isset($_POST["username"] , $_POST["pass"], $_POST["but"]))
    {
        if(empty($_POST['username']))       
        {       
            echo "UserName is empty!";   
            echo "\n";    
    
        }
        if(empty($_POST['pass']))
        {
             echo "Password is empty!";
             echo "\n";

        }

        if($_POST['pass'] == "qwerty" && $_POST['but'])
        {

        }
        else
        {
            echo "Login fail";
            echo "\n";
        }

    }
?>

 </body>
</html>