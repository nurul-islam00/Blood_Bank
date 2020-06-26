<?php
session_start();

?>
<html>

<head>
<style type="text/css">
	.box{
		width : 100%;
		height:700px;
		background-image: url(blood.jpg);
		
	}
	</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></head>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<div class="box">
<header>

<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
 <a class="navbar-brand" href="#">Blood Bank.</a>
 
 
 <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarText">
 <ul class="navbar-nav ml-auto">
 <li class="nav-item">

 <a class="nav-link text-center" href="searchdonar.php">Search Donar</a>
 </li>
 <li class="nav-item">

 <a class="nav-link text-center" href="about.php">about Blood Donation</a>
 </li>
 
 
 
 </ul>
 <button type="submit">
<img src="tower.png" alt="Save icon" height="30"/>
<br/>

<a href="profile.php" > Profile</a>
</button>
</div>

</nav>




</header>

<a href="login.php"> <p class="text-center">For Log out Click Here</p>  </a>

<?php
error_reporting(0);

?>

</body>


</html>