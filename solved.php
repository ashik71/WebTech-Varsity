


<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.css" rel="stylesheet" />
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap-theme.css" rel="stylesheet" />
<title>Problems</title>
<style>
table, th, td {
     border: 1px solid black;

}
table{
  width: 70%;
}
</style>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">AIUB Onlinejudge</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="Home.php">Home</a></li>
    <li><a href="Problems.php">Problems</a></li>
      <li><a href="Problems.php">Solved</a></li>

  </ul>
  </div>
  </nav>

  <div class="container">

  </div>

<?php
session_start();
$id=$_SESSION["loginemail"];
echo $id;

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

$sql = "SELECT ProblemID, ProblemName FROM onlinejudge.problems";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Title</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        //"<a href='".$link_address."'>Link</a>"
        $_SESSION["problemid"] =$row["ProblemID"];
         echo "<tr><td>" . $row["ProblemID"]. "</td><td>"."<a href='submission.php?submit=".$row["ProblemID"]."'>$row[ProblemName]</a>. </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>

</body>
</html>
