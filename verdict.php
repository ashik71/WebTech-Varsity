<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verdict</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap-theme.css" rel="stylesheet" />
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
      

    </ul>
    </div>
    </nav>

    <div class="container">

    </div>

<pre>


    <?php
    session_start();
    $id= $_SESSION["problemid"];

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

    $sql = "SELECT InputPath FROM onlinejudge.problems where ProblemID= $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                $sol=$row["InputPath"];
         }

    } else {
         echo "0 results";
    }



    $str1 = strtolower($_POST['textA']);
    $stringInput = preg_replace('/\s+/', '', $str1);//user input

    $str2=strtolower($sol);
    $stringSolution = preg_replace('/\s+/', '', $str2);//solution

    if(strcmp($stringSolution,$stringInput)==0){
      echo '<h1 style="color:Green;text-align:center;">Accepted</h1>';

    }
    else {
        echo '<h1 style="color:Red;text-align:center;">Wrong Answer</h1>';
    }




$conn->close();

    ?>


</pre>












  </body>
</html>
