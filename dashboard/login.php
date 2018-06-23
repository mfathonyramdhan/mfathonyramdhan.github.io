<?php

include "../connect.php";

$username = $_POST['email'];
$password = $_POST['password'];

if ($username == "" || $password == "")
{
  header("location: form-login.php");
}
else
{
  $q = "SELECT * FROM user WHERE email = '$username' AND password = $password";
  $query = mysqli_query($connect, $q);
  $cek = mysqli_num_rows($query);

  if ($cek > 0)
  {
    header("location: dashboard.php");
  }
  else
  {
    header("location: wrong.php");
  }
}
?>
