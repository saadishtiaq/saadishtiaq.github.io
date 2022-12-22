<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap Snippet: Login Form</title>
  <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <div class="notify"><span id="notifyType" class=""> Error: User Action Completed!</span> <span class="closebtn">X</span></div>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <form class="form-signin">
        <img src="../src/img/goldenLogoCropped.png">
        <h2 class="form-signin-heading">Employee login</h2>
        <div class="bar error">Invalid Credentials</div>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
<!-- partial -->
  
</body>
<script type="text/javascript">
    window.addEventListener("load", function() {
        $(".notify").addClass("active");
        $("#notifyType").addClass("failure");
    });
    $(".closebtn").click(function () {
        $(".notify").removeClass("active");
        $("#notifyType").removeClass("failure");
    });
    $("#submit").click(function (e) {
        $(".bar").css("display", "block");
        e.preventDefault();
    });
</script>
</html>
