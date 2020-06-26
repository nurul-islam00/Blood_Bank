<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
  </head>
  <body>
 
 
 <header>

<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
 <a class="navbar-brand" href="#"> Blood Bank.</a>
 
 
 <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarText">
 <ul class="navbar-nav ml-auto">
 
 <li class="navbar-item">
 
 <a class="nav-link" href="home.php"> Home Page</a>
 
 </li>
 
 
 
 </ul>
</div>

</nav>




</header>

 
 
  

  

<section class="container-fluid">

<section class="row justify-content-center">

 <section class="col-12 col-sm-6 col-md-3">
 
 <form role="form" method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Donar Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required="true">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User Name</label>
    <input type="text" class="form-control" id="user" name="user" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="pass" name="pass" required="true">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Interested Place for Blood donation</label>
    <input type="text" class="form-control" id="place" name="place" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="phone" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Blood Group</label>
    <input type="text" class="form-control" id="blood_group" name="blood_group" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Date of Blood Donation or Write not donated yet</label>
    <input type="text" class="form-control" id="date" name="date" required="true">
  </div>
  
  
  
  
  
  <button type="submit" class="btn btn-primary mt-4" name="res" id="res" >Register</button>
  
</form>
 </section>

</section>

</section>
  
  
  
  
  <?php
  
  error_reporting(0);
  include("cn.php");
 
 
  if (isset($_POST['res']))
  {
	  $a=$_POST['name'];
  $b=$_POST['user'];
  $c=$_POST['pass'];
  $d=$_POST['place'];
  $e=$_POST['phone'];
  $p=$_POST['blood_group'];
  $q=$_POST['date'];
  $f="select * from donar_info where user='$b'";
  $g=mysqli_query($con,$f);
  $h=mysqli_num_rows($g);
  echo $h;
  if($h==1)
	  
	  {
		  
		  echo "User Name is already taken";
		  
	  }
	  else 
	  {
		  $i="INSERT INTO donar_info VALUES ('$a','$b','$c','$d','$e','$p','$q')";
		  $j=mysqli_query($con,$i);
		  if($j)
			  
			  {
				  
				  echo "Registration is successfully completed !!!!";
				  
			  }
		  
		  
		  
	  }
 
 
  }
  
  ?>
  
 


  
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>