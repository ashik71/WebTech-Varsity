<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
 <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script type="text/javascript" src="valid.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </head>
  <body>

            <nav class="navbar navbar-default">
          <div class="container-fluid">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>



  <div class="row">
    <h1 style="text-align: center;">Welcome To AIUB OnlineJudge</h1>
    <div class="col-sm-offset-3 col-sm-6">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">Login</a></li>
        <li role="presentation"><a href="#Signup" aria-controls="Signup" role="tab" data-toggle="tab">SignUp</a></li>
      </ul>

      <!-- Tab panes -->

      <?php
      session_start();

       ?>


      <div class="tab-content">
        <!-- LogInTab -->
        <div role="tabpanel" class="tab-pane active" id="Login">
          <form id=signIn action="login.php" method="post">
                    <div class="form-group">
                      <label class="title_input"  for="exampleInputEmail" >Email address</label>
                      <input type="email" class="form-control" id="form_email1" name="eml"placeholder="Email">
                      <span class="error" id="email_error1"></span>
                    </div>
                    <div class="form-group">
                      <label class="title_input" for="exampleInputPassword">Password</label>
                      <input type="password" class="form-control" id="form_password1" name="pa" placeholder="Password">
                      <span class="error" id="password_error1"></span>
                    </div>
                    <button type="submit" class="btn btn-default" name="Submit">Sign in</button>
        </form>

    </div> <!-- End of LogInTab -->

<!-- Signup Tab -->
        <div role="tabpanel" class="tab-pane" id="Signup">
                  <form id=form_register action="data.php" method="post" >
          <div class="form-group">
            <label  class="title_input" for="exampleInputFirstName">FirstName</label>
            <input type="text" class="form-control" id="form_firstname" name="fname" placeholder="FirstName">
            <!--<span style="color:blue" id="firstname_error"></span> -->
            <span class="error" id="firstname_error"></span>
          </div>
          <div class="form-group">
            <label class="title_input"  for="exampleInputLastName">LastName</label>
            <input type="text" class="form-control" id="form_lastname" name="lastname" placeholder="LastName">
            <span class="error" id="lastname_error"></span>
          </div>
          <div class="form-group">
            <label class="title_input"  for="exampleInputUserName">UserName</label>
            <input type="text" class="form-control" id="form_username" name="username" placeholder="UserName">
            <span class="error" id="username_error"></span>
          </div>
          <div class="form-group">
            <label class="title_input"  for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="form_email" name="email" placeholder="Email">
            <span class="error" id="email_error"></span>
          </div>

          <div class="form-group">
            <label class="title_input"  for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="form_password" name="pass" placeholder="Password">
            <span class="error" id="password_error"></span>
          </div>

          <div class="form-group">
            <label class="title_input"  for="exampleInputSchoolId">SchoolId</label>
            <input type="text" class="form-control" id="form_schoolid" name="sclid" placeholder="SchoolId">
            <span class="error" id="schoolid_error"></span>
          </div>



          <!-- <input type="submit" class="btn" value="Register"> -->
        <button type="submit" id=ff class="btn btn-default" name="submit">Register</button>
        </form>


          </div> <!-- End of SignupTab -->

  </div> <!-- End of Tab panes -->
</div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </body>
</html>
