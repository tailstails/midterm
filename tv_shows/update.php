<?php

  require_once('../_config.php');
  include('./.env.php');
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));


    /*
    OBJECTIVE:
      1: Connect to the database and update the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the update was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */
  var_dump($_POST);
  $sql = "UPDATE tv_shows SET
            title = '{$_POST['title']}',
            description = '{$_POST['description']}',
            rating = '{$_POST['rating']}',
          WHERE id = {$_POST['id']}";
  echo $sql;
  $res = mysqli_query($conn, $sql);

session_start();

if ($res) {
  $_SESSION['notification'] = "The tv was created succesfully.";
} else {
  $_SESSION['notification'] = "There was an error creating the tv show: " . mysqli_error($conn);
}
header("Location: ./notification.php");
die; 
?>

