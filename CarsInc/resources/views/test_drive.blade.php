<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <title>Dashboard</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
		 <nav class="navbar navbar-expand-lg navbar-light bg-light">
		 	  <a class="navbar-brand" href="cars_list.html" >Cars List</a>
		 	  <a class="navbar-brand" href="car_parts_list.html">Car Parts</a>
		 	  <a class="navbar-brand" href="test_drive.html">Test Drive</a>

  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="cart.html"><img src="cart.png" width="30px" height="30px"></a>
          <a class="nav-item nav-link" href="index.html">Logout</a>
        </div>
    </div>
</nav>
<div class="container">
    <h1 class="centered">TEST DRIVE</h1>
    <form class="form-group" method="get">
        <div class="form-group">
          <label>Date</label>
          <input type="date" name="userid" class="form-control" placeholder="user id">
        </div>            
        <div class="form-group">
            <label>Time</label>
            <input type="time" name="userid" class="form-control" placeholder="user id">
        </div>            
        <div class="form-group">
            <label>Car</label>
            <select class="form-control">
              <option value="Audi R8">Audi R8</option>
              <option value="Suzuki Baleno">Suzuki Baleno</option>
              <option value="Rolls Royce Phantom">Rolls Royce Phantom</option>
              <option value="Mercedes Benz C">Mercedes Benz C</option>
              <option value="Renault Duster">Renault Duster</option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary form-control">Book now</button>
          </div>    
    </form>
</div>
</body>
</html>