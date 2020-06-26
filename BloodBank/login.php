
<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<header>

<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
 <a class="navbar-brand" href="#">Blood Bank. </a>
 <img src="tower.png" height="30">
 
 
 <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarText" align="right">
 
</div>

</nav>




</header>
<div class="container mt-5">
 
    <div class="card">
      <div class="card-header">
        <h2 class="bg-primary"> Log In Here </h2>
		
      </div>
      <div class="card-body">
       <div class="row">
          <div class="col-md-6 mx-auto">
            <form class="my-4" method="post" role="form">
              <div class="input-group">
			  <input type="text" name="user" class="form-control" placeholder="Enter User Name...">
                <input type="text" name="pass" class="form-control" placeholder="Enter Password...">
				
				
				
                <div class="input-group-append">
                  <button type="submit" name="res" class="btn btn-outline-info">Log IN</button>
                </div>
              </div>
            </form>
          </div>
        
      </div>
    </div>
  </div>
  </div>
  
  
  <a href="stre.php"> <p class="text-center">Click For sign up</p></a>






</body>


</html>



<?php
error_reporting(0);
include("cn.php");
   $s=$_POST['user'];
	$t=$_POST['pass'];
	
	
	if (isset($_POST['res']))
		
		{
			
			$a="SELECT * FROM donar_info WHERE user='$s' && pass='$t'";
			$b=mysqli_query($con,$a);
			$c=mysqli_num_rows($b);
			echo $c;
			if($c==1)
			{
				session_start();
				$_SESSION["username"]="$s";
				header("Location: home.php");
				
				
			}
			else 
			{
				
				echo "User Name or Password is not Correct";
				
			}
			
			
			
			
			
			
		}
		
		
		
	
	
	
	
	






?>