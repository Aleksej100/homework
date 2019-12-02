<?php
session_start();

    if(isset( $_POST["user"] ))
    {
    //  $error_symbol = TRUE;


      if (array_key_exists('calc_result', $_SESSION) == FALSE || is_array($_SESSION['calc_result']) == FALSE) {
        $_SESSION['calc_result'] = [];
      }

    //  if ($error_symbol) {
     //   $_SESSION['calc_result'][] = '<h1 style="color:red">Bad action</h1>';
     // } else {
      //  $result = calculate((int) $_POST['num_1'], (int) $_POST['num_2'], $_POST['symbol']);
    
        $_SESSION['calc_result'][] = '<h4> User: ' . $_POST['user'] . '</h4>';
    //  }

      if (array_key_exists('HTTP_REFERER', $_SERVER)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
      }
    }
    
?>
