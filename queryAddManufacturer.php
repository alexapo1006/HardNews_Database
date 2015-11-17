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
     include 'Login.php';
     //put the captured data into variable
	 
     $manufacturername=$_POST['ManufacturerName']; 
     $address=$_POST['Address'];
	 $mphoneno=$_POST['MPhoneNo'];
	 
	 
     // Escapes special characters in a string for use in an SQL statement.
   $manufacturername = mysqli_real_escape_string($dbconnect, $manufacturername);
   $address = mysqli_real_escape_string($dbconnect,$address);
   $mphoneno= mysqli_real_escape_string($dbconnect,$mphoneno);
   
   
   
   //I want to ensure that user does not put duplicates
   $checkresult = mysqli_query($dbconnect, "SELECT * FROM `manufacturer` WHERE    `ManufacturerName`='$manufacturername';");
       if (mysqli_num_rows($checkresult) > 0) {                
      echo "Duplicate name, the manufacturer already exists in the database.";
      }
	  else
	 {
     $sql="INSERT INTO manufacturer (ManufacturerID, ManufacturerName, Address, MPhoneNo) values (NULL,'$manufacturername', '$address','$mphoneno')"; //use NULL for auto number
     if (!mysqli_query($dbconnect,$sql))
      {
       die('Error: ' . mysqli_error($dbconnect));
      }
	  else
	  {
		  die('Entry was succesfully added!');
	  }
	  mysqli_close($dbconnect);
	 }
 ?>
 
</div>  

</body>
</html>
