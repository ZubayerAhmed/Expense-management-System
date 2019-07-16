<?php
require_once "connection.php";

$uname= $_POST["uname"];
$email= $_POST["email"];
$pass=$_POST["pass"];
$rpass=$_POST["rpass"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$address=$_POST["address"];


if ($pass!=$rpass) {
  echo "Password didn't matched";
}
else {
  // code...
  $sql = "INSERT INTO reg(uname,email,pass,rpass,fname,lname,phone,gender,address)
  VALUES ('$uname','$email','$pass','$rpass','$fname','$lname','$phone','$gender','$address')";

  if (mysqli_query($conn, $sql))
  {
    echo "New record created successfully";
    header('location: login.php');
  }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}



 ?>
