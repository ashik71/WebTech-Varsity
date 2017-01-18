<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Submission</title>
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
    $id=  $_GET['submit'];
    $_SESSION["problemid"] = $id;
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

    $sql = "SELECT ProblemID, ProblemName, ProblemDesc, SampleInput, SampleOutput FROM onlinejudge.problems where ProblemID= $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

                                                         while($row = $result->fetch_assoc()) {
                                                          echo  "<h1>Problem Id:$row[ProblemID]</h1>";
                                                          //echo "<h2>\t\t\t\t\t\t\t</h2>";
                                                          echo "<h2>Problem Name: $row[ProblemName]</h2>";
                                                          echo "<h2>Problem Description</h2>";
                                                          echo "<p>$row[ProblemDesc]</p><br>";

         }

    } else {
         echo "0 results";
    }

    $conn->close();

     ?>
     <form action="verdict.php" method="post">
     <textarea  name="textA" rows="10" cols="50">

     </textarea><br>
     <button type="submit">Submit</button>
     </form>

  </body>
</html>

</pre>



<!-- <!DOCTYPE html>
<html>
<body>

</body>
</html> -->
