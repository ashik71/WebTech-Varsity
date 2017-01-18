<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinejudge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




    $FirstName= $_POST['fname'];
    $LastName = $_POST['lastname'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password =  $_POST['pass'];
    $schoolid = $_POST['sclid'];
    $sql = "INSERT INTO onlinejudge.users (FirstName,LastName,UserName,Email,Password,SchoolID) VALUES ('$FirstName','$LastName','$userName','$email','$password','$schoolid')";


    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();




 ?>
