<?php include 'connect.php' ?>

<?php
if (isset($_POST['submitlogin'])) {
  $name = $_POST['uname'];
  $pass = $_POST['pass'];

  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
  $query = "SELECT username, pass FROM signup WHERE username = '$name' AND pass = '$hashedPass'";

  if (password_verify($pass, $hashedPass)) {
    $query = "SELECT username, pass FROM signup WHERE username = '$name'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      echo 'Login query ERROR!';
    }
    $count = mysqli_num_rows($result);
    if ($count < 1) {
      echo 'USERNAME or PASSWORD are incorrect!';
    } else {
      header("Location: home.php");
    }
  } else {
    echo "Password D-cry fail;";
  }
}
