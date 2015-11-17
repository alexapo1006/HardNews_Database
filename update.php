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
    
<div class="site-content-update">
<h1 class = "textadd">Update Reader</h1>
<?php
	include('Login.php');

	$readerid=$_GET['ReaderID'];
	$readerid = mysqli_real_escape_string($dbconnect, $readerid);

	$sql1="SELECT * FROM reader WHERE ReaderID='$readerid'";
	$result1=mysqli_query($dbconnect,$sql1);
	$row1=mysqli_fetch_assoc($result1);

	mysqli_close($dbconnect);

?>
<form id="UpdateReader"  name="form1" method="post" action="updatedReader.php">
<table>
	<input type="hidden" name="ReaderID" value="<?php echo $row1['ReaderID']; ?>"/>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="Name" value="<?php echo $row1['Name']; ?>" maxlength="35"/></td>
	</tr>
   
	<tr>
		<td>Email:</td>
		<td><input type="text" name="Email" value="<?php echo $row1['Email']; ?>" maxlength="254"/></td>
	</tr>

	<tr>
		<td>Phone Number:</td>
		<td><input type="text" name="PhoneNo" value="<?php echo $row1['PhoneNo']; ?>" maxlength="20"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Update Reader" size="50"/>
		</td>
	</tr>
    
</table>
<h1 class = "textadd">Update Request Status</h1>
<?php
	include('Login.php');

	$requestid=$_GET['RequestID'];
	$requestid = mysqli_real_escape_string($dbconnect, $requestid);

	$sql2="SELECT * FROM request WHERE RequestID='$requestid'";
	$result2=mysqli_query($dbconnect,$sql2);
	$row2=mysqli_fetch_assoc($result2);

	mysqli_close($dbconnect);

?>
<form id="UpdateRequest"  name="form2" method="post" action="updatedRequest.php">
<table>
	<input type="hidden" name="RequestID" value="<?php echo $row2['RequestID']; ?>"/>
	<input type="hidden" name="ReaderID" value="<?php echo $row2['ReaderID']; ?>"/>
	<input type="hidden" name="Date" value="<?php echo $row2['Date']; ?>"/>
	<tr>
		<td>Request Status:</td>
		<td><input type="text" name="Status" value="<?php echo $row2['Status']; ?>" maxlength="1"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Update Status"/>
		</td>
	</tr>
    
</table>

<h1 class = "textadd">Update Review</h1>
<?php
	include('Login.php');

	$reviewid=$_GET['ReviewID'];
	$reviewid = mysqli_real_escape_string($dbconnect, $reviewid);

	$sql3="SELECT * FROM review WHERE ReviewID='$reviewid'";
	$result3=mysqli_query($dbconnect,$sql3);
	$row3=mysqli_fetch_assoc($result3);

	mysqli_close($dbconnect);

?>
<form id="UpdateReview"  name="form2" method="post" action="updatedReview.php">
<table>
	<input type="hidden" name="ReviewID" value="<?php echo $row3['ReviewID']; ?>"/>
	<tr>
		<td>Request ID:</td>
		<td><input type="text" name="RequestID" value="<?php echo $row3['RequestID']; ?>" maxlength="11"/></td>
    </tr>
    <tr>
		<td>Product ID:</td>
		<td><input type="text" name="ReviewID" value="<?php echo $row3['ProductID']; ?>" maxlength="11"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Update Review" size="50"/>
		</td>
	</tr>
     
</table>

<h1 class = "textadd">Update Product Name</h1>
<?php
	include('Login.php');

	$productid=$_GET['ProductID'];
	$productid = mysqli_real_escape_string($dbconnect, $productid);

	$sql4="SELECT * FROM product WHERE ProductID='$productid'";
	$result4=mysqli_query($dbconnect,$sql4);
	$row4=mysqli_fetch_assoc($result4);

	mysqli_close($dbconnect);

?>
<form id="UpdateProduct"  name="form4" method="post" action="updatedProduct.php">
<table>
	<input type="hidden" name="ProductID" value="<?php echo $row4['ProductID']; ?>"/>
	<input type="hidden" name="ManufacturerID" value="<?php echo $row4['ManufacturerID']; ?>"/>
    <input type="hidden" name="CategoryID" value="<?php echo $row4['CategoryID']; ?>"/>
    <tr>
		<td>Product Name:</td>
		<td><input type="text" name="ProductName" value="<?php echo $row4['ProductName']; ?>" maxlength="35"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Update Product" size="50"/>
		</td>
	</tr>
     
</table>

<h1 class = "textadd">Update Manufacturer</h1>
<?php
	include('Login.php');

	$manufacturerid=$_GET['ManufacturerID'];
	$manufacturerid = mysqli_real_escape_string($dbconnect, $manufacturerid);

	$sql5="SELECT * FROM manufacturer WHERE ManufacturerID='$manufacturerid'";
	$result5=mysqli_query($dbconnect,$sql5);
	$row5=mysqli_fetch_assoc($result5);

	mysqli_close($dbconnect);

?>
<form id="UpdateManufacturer"  name="form5" method="post" action="updatedManufacturer.php">
<table>
	<input type="hidden" name="ManufacturerID" value="<?php echo $row5['ManufacturerID']; ?>"/>
	<tr>
		<td>Manufacturer Name:</td>
		<td><input type="text" name="ManufacturerName" value="<?php echo $row5['ManufacturerName']; ?>" maxlength="35"/></td>
	</tr>
   
	<tr>
		<td>Address:</td>
		<td><input type="text" name="Address" value="<?php echo $row5['Address']; ?>" maxlength="35"/></td>
	</tr>

	<tr>
		<td>Phone Number:</td>
		<td><input type="text" name="MPhoneNo" value="<?php echo $row5['MPhoneNo']; ?>" maxlength="20"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Update Manufacturer" size="50"/>
		</td>
	</tr>
     
</table>

<h1 class = "textadd">Update Category</h1>
<?php
	include('Login.php');

	$categoryid=$_GET['CategoryID'];
	$categoryid = mysqli_real_escape_string($dbconnect, $categoryid);

	$sql6="SELECT * FROM category WHERE CategoryID='$categoryid'";
	$result6=mysqli_query($dbconnect,$sql6);
	$row6=mysqli_fetch_assoc($result6);

	mysqli_close($dbconnect);

?>
<form id="UpdateCategory"  name="form6" method="post" action="updatedCategory.php">
<table>
	<input type="hidden" name="CategoryID" value="<?php echo $row6['CategoryID']; ?>"/>
	<tr>
		<td>Category Name:</td>
		<td><input type="text" name="CategoryName" value="<?php echo $row6['CategoryName']; ?>" maxlength="35"/></td>
	</tr>
   
	<tr>
		<td>Items Count:</td>
		<td><input type="text" name="ItemsCount" value="<?php echo $row6['ItemsCount']; ?>" maxlength="254"/></td>
	</tr>

	<tr>
		<td>Area:</td>
		<td><input type="text" name="Area" value="<?php echo $row6['Area']; ?>" maxlength="35"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Update Category" size="50"/>
		</td>
	</tr>
     
</table>
</div>  
</body>
</html>
