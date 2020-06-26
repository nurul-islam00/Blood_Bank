<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
   
   <header>

<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
 <a class="navbar-brand" href="#">Blood Bank.</a>
 
 
 <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarText">
 <ul class="navbar-nav ml-auto">
 <li class="nav-item">

 <a class="nav-link text-center" href="home.php">Go to Home Page</a>
 </li>
 
 
 
 </ul>
 
</div>

</nav>




</header>
   
   
   <div class="container mt-5">
 
    <div class="card">
      <div class="card-header">
        <h1 class="bg-success"> My Profile </h1>
		
      </div>
      <div class="card-body">
       <div class="row">
          <div class="col-md-6 mx-auto">
           
		    <?php
    
   
   
   
       error_reporting(0);
      include("cn.php");
	 
	 session_start();
	  
	  $a=$_SESSION["username"];
	  $b="SELECT * from donar_info where user='$a'";
	  $c=mysqli_query($con,$b);
	  
	  
	  while($result=mysqli_fetch_assoc($c))
		
		{
			
			echo "Name :- ".$result['name']."<br>";
			echo "Phone:-".$result['phone']."<br>";
			echo "Blood Group :- ".$result['blood_group']."<br>";
			
			
			
			
		}
		
	
	  
	  
	  
	  
   
   
   
 
 
   
   ?>
   
   
		   
		   
		   
          </div>
        
      </div>
    </div>
  </div>
  </div>
  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
	
	
	
	
	
	
	
	
  </body>
</html>