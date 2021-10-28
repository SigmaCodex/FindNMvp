<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>



<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/login.css">



<body>

	<img class="oval1" src="assets/img/Oval.png">
	<img class="oval2" src="assets/img/Oval1.png">
	<img class="oval3" src="assets/img/Oval2.png">
	<img class="oval4" src="assets/img/Oval.png">
	<img class="oval5" src="assets/img/oval1.png">
	<img class="oval6" src="assets/img/Oval1.png">

	    <div class="login-form">
        <form action="valid" method="post">
            <h2 class="sr-only"></h2>
            <div class="illustration"><img src="assets/img/elixir.png"></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>

     		 <center><span class="text-danger"><?php if(isset($error1)){echo
						$error1;}?></span>
			</center>

            <div class="form-group"><!-- <a href="homepage.html" class="btn btn-primary btn-block">Log In</a> --><input type="submit" name="" value="Login" class="btn btn-primary btn-block	"></div><a href="#" class="forgot">Forgot your email or password?</a>
        </form>
    	</div>

</body>


</html>