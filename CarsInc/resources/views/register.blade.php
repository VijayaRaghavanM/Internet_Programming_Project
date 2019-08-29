<!DOCTYPE html>
<html>
<head>
  <title>Carz - Register</title><!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
	.container{color: black; text-align: center;}
	.design{color: black; padding: 40px; font-style: oblique;text-align: left;}
  body{font-family: 'Tajawal', sans-serif;}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="login.html">Login</a>
            <a class="nav-item nav-link" href="register.html">Register</a>
            <a class="nav-item nav-link" href="about.html">About</a>
            </div>
        </div>
    </nav>
<div class="container">
    <form class="con" action="login.html">
    <h1>New User!!</h1> 
      <input type="text" name="fname" class="form-control" placeholder="Name">
      <br>	
      <input type="text" name="Username" class="form-control" placeholder="user ID"><br>
      <input type="text" name="Email" class="form-control" placeholder="Email ID"> <br>
      <input type="Password" name="Password" class="form-control" placeholder="Password"><br>
      <input type="Password" name="Password" class="form-control" placeholder=" Confirm Password"><br>
      <input type="date" name="dob"class="form-control" placeholder="Date Of Birth"><br>
      <button class="btn btn-primary">Create Account</button>
      <a href="login.html" class="btn btn-primary">Login if you already have an account</a>
    </form>
</div>
</body>
</html>