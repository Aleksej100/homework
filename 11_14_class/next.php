<?php


    if(isset( $_POST["num_1"] , $_POST["num_2"], $_POST["num_3"]))
    {
      switch ($_POST["num_3"]) {
        case '+':
          # code...
          $result = $_POST["num_1"] + $_POST["num_2"];

          echo( "<h1> Sum: "  .$result.  "</h1>");
          break;
        case '-':
          # code...
          if($_POST["num_2"] > $_POST["num_1"])
          {
            echo "Error";
          }
          else
          {
          $result = $_POST["num_1"] - $_POST["num_2"];
  
          echo( "<h1> Sum: "  .$result.  "</h1>");
          }
          break;
        case '*':
          # code...
          $result = $_POST["num_1"] * $_POST["num_2"];
    
          echo( "<h1> Sum: "  .$result.  "</h1>");
          break;
        case '/':
          # code...
          $result = $_POST["num_1"] / $_POST["num_2"];
      
          echo( "<h1> Sum: "  .$result.  "</h1>");
          break;
        case '^':
          # code...
          $result = pow($_POST["num_1"] , $_POST["num_2"]);
        
          echo( "<h1> Sum: "  .$result.  "</h1>");
          break;

        default:
          # code...
          echo " Nothing ";
          break;
      }

    }
    
?>
