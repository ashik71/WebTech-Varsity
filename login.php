<?php
session_start();
$email=$_POST['eml'];
$pass=$_POST['pa'];
$success = false;
$_SESSION["emll"] = $email;

$_SESSION["loginemail"] = $email;
$_SESSION["loginpass"] = $pass;

   //open connection to mysql db
   $connection = mysqli_connect("localhost","root","","onlinejudge") or die("Error " . mysqli_error($connection));

   //fetch table rows from mysql db
   $sql = "select * from users";
   $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

   //create an array
   $valid = array();
   while($row =mysqli_fetch_array($result))
   {
       $valid[] = $row;
   }


   $valid = json_encode($valid);
   $check = json_decode($valid,true);
//echo $check["Email"];

for($i = 0; $i < sizeof($check); $i++){
  if($check[$i]['Email']==$email && $check[$i]['Password']==$pass){


  $success = true;
  break;
  }
}
if($success){


  header("Location:home.php");
}

else{
  // $message = "Check User Email and Password";
  // echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location:index.php");

}

   //close the db connection
   mysqli_close($connection);
?>
