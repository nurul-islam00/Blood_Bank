<?php 


$con = new PDO('mysql:dbname=bloodbank;host=localhost', 'root', '');
if (isset($_GET['q'])) {
  $q = $_GET['q'];
  $statement = $con->prepare("select * from donar_info where place like :place or blood_group like :blood_group");
  $statement->execute([
    ':place' => '%' . $q .'%',
	':blood_group' => '%'. $q .'%'
  ]);
} else {
  $statement = $con->prepare('select * from donar_info');
  $statement->execute();
}
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Search Donar!</title>
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

 <a class="nav-link" href="home.php">Home</a>
 </li>

 
 
 
 </ul>
</div>

</nav>




</header>


<div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2 class="bg-success">Searching Donar</h2>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form class="my-4">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="search....">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-info">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <table class="table table-bordered">
          <tr>
            <th class="text-yellow bg-primary">Donar Name</th>
            <th class="bg-info">Interested Place for Donartion</th>
			<th class="bg-danger"> Blood Group</th>
			<th class="bg-danger"> Phone Number</th>
			<th class="bg-danger">Last Time when donated Blood</th>
			
          </tr>
          <?php foreach($people as $instrument): ?>
            <tr>
              <td><?php echo $instrument->name; ?></td>
              <td><?php echo $instrument->place; ?></td>
			  <td><?php echo $instrument->blood_group; ?></td>
			  <td><?php echo $instrument->phone; ?></td>
			   <td><?php echo $instrument->date; ?></td>
			  
			  
            </tr>
          <?php endforeach; ?>

        </table>
      </div>
    </div>
  </div>
   
   
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>