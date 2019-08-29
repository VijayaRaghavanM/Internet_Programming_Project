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
    <h1 class="centered">PARTS LIST</h1>
    <div class="card">
        <div class="left">
          <img 
          src="https://images-na.ssl-images-amazon.com/images/I/61GGaYeYcIL._SL1042_.jpg" >
        </div>
        <div class="right">
          <h1>
            JBL Speaker System
          </h1>
          <ul>
            <li>Peak Power 270W, 75W(RMS)</li>
                
            <li>Advanced Non Magnetic FRP frames</li>
            <li>Carbon Injected Plus One Cones</li>
          </ul>
          <button class="btn btn-primary">Add to cart</button>
          <button class="btn btn-primary">Book now</button>
        </div>
      </div>
      <div class="card">
          <div class="left">
            <img 
            src="https://img1s.cpsimg.com/is/image/Autos/repf504617_3?$JCW_MAIN$" >
          </div>
          <div class="right">
            <h1>
              Ignition coil
            </h1>
            <ul>
              <li>2-Prong Blade Male Terminal; 1 Female Connector</li>
                  
              <li>Quantity Sold: Sold individually</li>
              <li>1-year unlimited-mileage warranty</li>
            </ul>
            <button class="btn btn-primary">Add to cart</button>
            <button class="btn btn-primary">Book now</button>
          </div>
        </div>


</div>
</body>
</html>