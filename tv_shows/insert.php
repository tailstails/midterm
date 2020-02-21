<?php

  require_once('../_config.php');
  include('./.env.php');
  include_once('_utilities/_connect.php');

  $conn = connect();
  /*
    OBJECTIVE:
      1: Connect to the database and insert the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the insert was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */

  $sql = "INSERT INTO tv_shows (
    title,
    description,
    rating
) VALUES (
    '{$_POST['title']}',
    '{$_POST['description']}',
    '{$_POST['rating']}'
)";

echo $sql;



var_dump($_POST);

$res = mysqli_query($conn, $sql);

session_start();

  if ($res) {
    $_SESSION['notification'] = "The tv show was created succesfully.";
  } else {
    $_SESSION['notification'] = "There was an error creating the tv show: " . mysqli_error($conn);
  }
  header("Location:../notification.php");
  die; 
  ?>