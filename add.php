<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>HardNews - Reviews Database</title>
    
    <!-- CSS Links -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:700,400,300,600,' rel='stylesheet' type='text/css'>
    
    
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
    
<div class="site-content-add">
<div class = "contentaddreader">
<h1 class="textadd">Add Reader</h1>
<form id="AddReader" name="form1" method="post" action="queryAddReader.php"> 
<table>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="Name" value="" maxlength="35"/></td>
	</tr>
   
	<tr>
		<td>Email:</td>
		<td><input type="text" name="Email" value="" maxlength="254"/></td>
	</tr>

	<tr>
		<td>Phone Number:</td>
		<td><input type="text" name="PhoneNo" value="" maxlength="20"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Add Reader" size="50"/>
		</td>
	</tr>
    
</table>
</div>  

<div class = "contentaddrequest">
<h1 class="textadd">Add Request</h1>
<form id="AddRequest" name="form2" method="post" action="queryAddRequest.php"> 
<table>

	<tr>
        <td>Select Reader:</td> 
        <td><select name="ReaderID">
		  <?php
          	include 'Login.php';
       		$result1 = mysqli_query($dbconnect, "SELECT ReaderID, Name FROM reader");
        	while($row = mysqli_fetch_assoc($result1)) {
			?>
    		<option value="<?php echo $row['ReaderID']; ?>"><?php echo $row['Name'];?></option> 
          <?php }?> </select> 
       </td>
    </tr>

	<tr>
		<td>Date:</td>
		<td><input type="date" max="" name="Date"/></td>
	</tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Add Request" size="50"/>
		</td>
	</tr>
    
</table>
</div>  

<div class = "contentaddreview">
<h1 class="textadd">Add Review</h1>
<form id="AddReview" name="form3" method="post" action="queryAddReview.php"> 
<table>

	<tr>
        <td>Select RequestID:</td> 
        <td><select name="RequestID">
		  <?php
          	include 'Login.php';
       		$result1 = mysqli_query($dbconnect, "SELECT * FROM `request` WHERE `Status` = 0");
        	while($row = mysqli_fetch_assoc($result1)) {
			?>
    		<option value="<?php echo $row['RequestID']; ?>"><?php echo $row['RequestID'];?></option> 
          <?php }?> </select> 
       </td>
    </tr>

	<tr>
        <td>Select Product:</td> 
        <td><select name="ProductID">
		  <?php
          	include 'Login.php';
       		$result2 = mysqli_query($dbconnect, "SELECT ProductID, ProductName FROM product");
        	while($row2 = mysqli_fetch_assoc($result2)) {
			?>
    		<option value="<?php echo $row2['ProductID']; ?>"><?php echo $row2['ProductName'];?></option> 
          <?php }?> </select> 
       </td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Add Review" size="50"/>
		</td>
	</tr>
    
</table>

<div class = "contentaddproduct">
<h1 class="textadd">Add Product</h1>
<form id="AddProduct" name="form4" method="post" action="queryAddProduct.php"> 
<table>

	<tr>
        <td>Select Manufacturer:</td> 
        <td><select name="ManufacturerID">
		  <?php
          	include 'Login.php';
       		$result3 = mysqli_query($dbconnect, "SELECT ManufacturerID, ManufacturerName FROM manufacturer");
        	while($row3 = mysqli_fetch_assoc($result3)) {
			?>
    		<option value="<?php echo $row3['ManufacturerID']; ?>"><?php echo $row3['ManufacturerName'];?></option> 
          <?php }?> </select> 
       </td>
    </tr>

	<tr>
        <td>Select Category:</td> 
        <td><select name="CategoryID">
		  <?php
          	include 'Login.php';
       		$result4 = mysqli_query($dbconnect, "SELECT CategoryID, CategoryName FROM category");
        	while($row4 = mysqli_fetch_assoc($result4)) {
			?>
    		<option value="<?php echo $row4['CategoryID']; ?>"><?php echo $row4['CategoryName'];?></option> 
          <?php }?> </select> 
       </td>
    </tr>
    
    <tr>
		<td>Product Name:</td>
		<td><input type="text" name="ProductName" value="" maxlength="35"/></td>
	</tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Add Product" size="50"/>
		</td>
	</tr>
    
</table>

<div class = "contentaddmanufacturer">
<h1 class="textadd">Add Manufacturer</h1>
<form id="AddManufacturer" name="form5" method="post" action="queryAddManufacturer.php"> 
<table>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="ManufacturerName" value="" maxlength="35"/></td>
	</tr>
   
	<tr>
		<td>Address:</td>
		<td><input type="text" name="Address" value="" maxlength="35"/></td>
	</tr>

	<tr>
		<td>Phone Number:</td>
		<td><input type="text" name="MPhoneNo" value="" maxlength="20"/></td>
    </tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Add Manufacturer" size="50"/>
		</td>
	</tr>
    
</table>

<div class = "contentaddcategory">
<h1 class="textadd">Add Category</h1>
<form id="AddCategory" name="form5" method="post" action="queryAddCategory.php"> 
<table>

	<tr>
		<td>Category Name:</td>
		<td><input type="text" name="CategoryName" value="" maxlength="35"/></td>
	</tr>
   
	<tr>
		<td>Area:</td>
		<td><input type="text" name="Area" value="" maxlength="35"/></td>
	</tr>
    
	<tr>
		<td  colspan="2" align="center">
        </form>
        <input type="submit" name="Submit" value="Add Category" size="50"/>
		</td>
	</tr>
    
</table>
</div>  
</body>
</html>
