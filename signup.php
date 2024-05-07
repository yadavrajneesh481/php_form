<?php include 'connect.php' ?>

<?php

if (isset($_POST['signup'])) {
  $username = $_POST['uuname'];
  $pass = $_POST['upass'];
  $cPass = $_POST['upass2'];
  $name = $_POST['urname'];
  $cardNum = $_POST['ucc'];
  $email = $_POST['uemail'];
  $phone = $_POST['uphone'];
  $add = $_POST['uaddress'];
  $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
  if($pass==$cPass){

    $query = "INSERT INTO signup(username, pass, name, cardnumber, email, pnumber, address) VALUES('$username', '$hashedPass', '$name', '$cardNum', '$email', '$phone', '$add')";
  }
  else{
    echo ' password not match ';
  }

  $result = mysqli_query($conn, $query);
  if (!$result) {
    echo 'Query Error!';
  }
  header("Location: home.php");
}