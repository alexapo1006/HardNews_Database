<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>HardNews - Reviews Database</title>
    
    <!-- CSS Links -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:700,400,300,600,' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>

<body>

<header>

</header>

    <div class="nav-container">
    
    <a href="index.php"><img class="logo" src="img/logo.png" width="493" height="98" alt="Logo"/></a>
    
    <nav>
    	<ul class="navbar">
        	<li><a class="link-1" href="index.php">Home</a></li>
            <li><a class="link-2" href="add.php">Add</a></li>
            <li><a class="link-5" href="show.php">Edit</a></li>
    	</ul>
	</nav>
    </div>
    
<div class="site-content">
<?php
	include('Login.php');

	$reviewid=$_GET['ReviewID'];

	$sql3="DELETE FROM review WHERE ReviewID='$reviewid'";
	mysqli_query($dbconnect,$sql3);
	
	if (!mysqli_query($dbconnect,$sql3))
      {
       die('Error: Check Foreign Constraints and try again in the right order! <br>' . mysqli_error($dbconnect));
      }
	  else
	  {
		  die('Entry was succesfully deleted!');
	  }
	mysqli_close($dbconnect);
?>

</div>  
</body>
</html>
