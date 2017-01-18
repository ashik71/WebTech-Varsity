
$(function(){

  $("#firstname_error").hide();
  $("#lastname_error").hide();
  $("#username_error").hide();
  $("#email_error").hide();
  $("#email_error1").hide();
  $("#password_error").hide();
  $("#password_error1").hide();
  $("#schoolid_error").hide();

  var error_firstname= false;
  var error_lastname= false;
  var error_username= false;
  var error_email= false;
  var error_email1= false;
  var error_password= false;
  var error_password1= false;
  var error_schoolid= false;

  $("#form_firstname").focusout(function(){
    check_firstname();

  });

  $("#form_lastname").focusout(function(){
    check_lastname();

  });

  $("#form_username1").focusout(function(){
    check_username1();

  });

  $("#form_username").focusout(function(){
    check_username();

  });


  $("#form_email").focusout(function(){
    check_email();

  });

  $("#form_email1").focusout(function(){
    check_email1();

  });


  $("#form_password").focusout(function(){
    check_password();

  });

  $("#form_password1").focusout(function(){
    check_password1();

  });

  $("#form_schoolid").focusout(function(){
    check_schoolid();

  });


  function check_firstname(){
    var u= $("#form_firstname").val().length;
    if(u ==0){
        $("#firstname_error").html("You can't leave this empty.");
          $("#firstname_error").show();
        error_firstname= true;
        flag=1;
    }
    else {
        $("#firstname_error").hide();
    }
  }

  function check_lastname(){
    var u= $("#form_lastname").val().length;
    if(u==0){
        $("#lastname_error").html("You can't leave this empty.");
          $("#lastname_error").show();
        error_lastname= true;
        flag=1;
    }
    else {
        $("#lastname_error").hide();
    }
  }

  function check_username(){
    var u= $("#form_username").val().length;
    if(u==0){
        $("#username_error").html("You can't leave this empty.");
          $("#username_error").show();
        error_username= true;
        flag=1;
    }
    else {
        $("#username_error").hide();
    }
  }

  function check_username(){
    var u= $("#form_username").val().length;
    if(u==0){
        $("#username_error").html("You can't leave this empty.");
          $("#username_error").show();
        error_username= true;
        flag=1;
    }
    else {
        $("#username_error").hide();
    }
  }






  function check_email(){
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

    if(pattern.test($("#form_email").val())){
        $("#email_error").hide();
    }
    else {
      $("#email_error").html("Invalid Email Address");
        $("#email_error").show();
      error_email= true;
      flag=1;
    }

  }


  function check_email1(){
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

    if(pattern.test($("#form_email1").val())){
        $("#email_error1").hide();
    }
    else {
      $("#email_error1").html("Invalid Email Address");
        $("#email_error1").show();
      error_email1= true;
      flag=1;
    }

  }



  function check_password(){
    var u= $("#form_password").val().length;
    if(u==0){
        $("#password_error").html("You can't leave this empty.");
          $("#password_error").show();
        error_password= true;
        flag=1;
    }
    else {
        $("#password_error").hide();
    }
  }

  function check_password1(){
    var u= $("#form_password1").val().length;
    if(u==0){
        $("#password_error1").html("You can't leave this empty.");
          $("#password_error1").show();
        error_password1= true;
        flag=1;
    }
    else {
        $("#password_error1").hide();
    }
  }



  function check_schoolid(){
    var u= $("#form_schoolid").val().length;
    if(u==0){
        $("#schoolid_error").html("You can't leave this empty.");
          $("#schoolid_error").show();
        error_schoolid= true;
        flag=1;
    }
    else {
        $("#schoolid_error").hide();
    }
  }

$("#ff").click(function(){
   //alert("Hello! I am an alert box!!");
   error_firstname= false;
   error_lastname= false;
   error_username= false;
   error_email= false;
   error_password= false;
   error_schoolid= false;

  check_firstname();
  check_lastname();
  check_username();
  check_email();
  check_password();
  check_schoolid();

  if ((error_firstname == false) && (error_lastname == false) && (error_username == false) && (error_email == false)
          && (error_password == false) && (error_schoolid == false)){
    return true;
  } else {
    return false;
  }


});





});
