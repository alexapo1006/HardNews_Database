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
    
    <a href="index.php"><img class="logo" src="img/logo.png" width="605" height="98" alt="Logo"/></a>
    
    <nav>
    	<ul class="navbar">
        	<li><a class="link-1" href="index.php">Home</a></li>
            <li><a class="link-2" href="add.php">Add</a></li>
            <li><a class="link-5" href="show.php">Edit</a></li>
    	</ul>
	</nav>
    </div>
    
<div class="site-content-show">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<h1 class="textupdate">Edit READER</h1>
<?php

	include('Login.php');

	$table1='reader';

	$sql1="SELECT * FROM `".$table1."`";
	$result1=mysqli_query($dbconnect,$sql1);
	
	$data1=array();
	$d1=0;
	while($row1=mysqli_fetch_assoc($result1)){
		$dataFields1=array();

		while(list($key1,$value1)=each($row1)){
			$dataFields1[]='<td>'.$row1[$key1].'</td>';
			if ($d1==0){
				$dataKeys1[]='<th>'.$key1.'</th>';
			}
		}

		if ($d1==0){
			$data1[$d1]='<tr>'.join('',$dataKeys1).'<th>Actions</th></tr>';
			$d1++;
		}

		$data1[$d1]='<tr>'.join('',$dataFields1).'<td>
			<a href="update.php?ReaderID='.$row1['ReaderID'].'">Update</a>
			<a href="deleteReader.php?ReaderID='.$row1['ReaderID'].'">Delete</a>
		</td></tr>';
		$d1++;
	}
	mysqli_free_result($result1);

	if ($d1>0){
		echo '<table>'.join('',$data1).'</table>';
	}
	else {
		echo 'Sorry, data was not found';
	}

	mysqli_close($dbconnect);

?>
<h1 class="textupdate">Edit REQUEST</h1>
<?php

	include('Login.php');

	$table2='request';

	$sql2="SELECT * FROM `".$table2."`";
	$result2=mysqli_query($dbconnect,$sql2);
	
	$data2=array();
	$d2=0;
	while($row2=mysqli_fetch_assoc($result2)){
		$dataFields2=array();

		while(list($key2,$value2)=each($row2)){
			$dataFields2[]='<td>'.$row2[$key2].'</td>';
			if ($d2==0){
				$dataKeys2[]='<th>'.$key2.'</th>';
			}
		}

		if ($d2==0){
			$data2[$d2]='<tr>'.join('',$dataKeys2).'<th>Actions</th></tr>';
			$d2++;
		}

		$data2[$d2]='<tr>'.join('',$dataFields2).'<td>
			<a href="update.php?RequestID='.$row2['RequestID'].'">Update</a>
			<a href="deleteRequest.php?RequestID='.$row2['RequestID'].'">Delete</a>
		</td></tr>';
		$d2++;
	}
	mysqli_free_result($result2);

	if ($d2>0){
		echo '<table>'.join('',$data2).'</table>';
	}
	else {
		echo 'Sorry, data was not found';
	}

	mysqli_close($dbconnect);

?>

<h1 class="textupdate">Edit REVIEW</h1>
<?php

	include('Login.php');

	$table3='review';

	$sql3="SELECT * FROM `".$table3."`";
	$result3=mysqli_query($dbconnect,$sql3);
	
	$data3=array();
	$d3=0;
	while($row3=mysqli_fetch_assoc($result3)){
		$dataFields3=array();

		while(list($key3,$value3)=each($row3)){
			$dataFields3[]='<td>'.$row3[$key3].'</td>';
			if ($d3==0){
				$dataKeys3[]='<th>'.$key3.'</th>';
			}
		}

		if ($d3==0){
			$data3[$d3]='<tr>'.join('',$dataKeys3).'<th>Actions</th></tr>';
			$d3++;
		}

		$data3[$d3]='<tr>'.join('',$dataFields3).'<td>
			<a href="update.php?ReviewID='.$row3['ReviewID'].'">Update</a>
			<a href="deleteReview.php?ReviewID='.$row3['ReviewID'].'">Delete</a>
		</td></tr>';
		$d3++;
	}
	mysqli_free_result($result3);

	if ($d3>0){
		echo '<table>'.join('',$data3).'</table>';
	}
	else {
		echo 'Sorry, data was not found';
	}

	mysqli_close($dbconnect);

?>

<h1 class="textupdate">Edit PRODUCT</h1>
<?php

	include('Login.php');

	$table4='product';

	$sql4="SELECT * FROM `".$table4."`";
	$result4=mysqli_query($dbconnect,$sql4);
	
	$data4=array();
	$d4=0;
	while($row4=mysqli_fetch_assoc($result4)){
		$dataFields4=array();

		while(list($key4,$value4)=each($row4)){
			$dataFields4[]='<td>'.$row4[$key4].'</td>';
			if ($d4==0){
				$dataKeys4[]='<th>'.$key4.'</th>';
			}
		}

		if ($d4==0){
			$data4[$d4]='<tr>'.join('',$dataKeys4).'<th>Actions</th></tr>';
			$d4++;
		}

		$data4[$d4]='<tr>'.join('',$dataFields4).'<td>
			<a href="update.php?ProductID='.$row4['ProductID'].'">Update</a>
			<a href="deleteProduct.php?ProductID='.$row4['ProductID'].'">Delete</a>
		</td></tr>';
		$d4++;
	}
	mysqli_free_result($result4);

	if ($d4>0){
		echo '<table>'.join('',$data4).'</table>';
	}
	else {
		echo 'Sorry, data was not found';
	}

	mysqli_close($dbconnect);

?>

<h1 class="textupdate">Edit MANUFACTURER</h1>
<?php

	include('Login.php');

	$table5='manufacturer';

	$sql5="SELECT * FROM `".$table5."`";
	$result5=mysqli_query($dbconnect,$sql5);
	
	$data5=array();
	$d5=0;
	while($row5=mysqli_fetch_assoc($result5)){
		$dataFields5=array();

		while(list($key5,$value5)=each($row5)){
			$dataFields5[]='<td>'.$row5[$key5].'</td>';
			if ($d5==0){
				$dataKeys5[]='<th>'.$key5.'</th>';
			}
		}

		if ($d5==0){
			$data5[$d5]='<tr>'.join('',$dataKeys5).'<th>Actions</th></tr>';
			$d5++;
		}

		$data5[$d5]='<tr>'.join('',$dataFields5).'<td>
			<a href="update.php?ManufacturerID='.$row5['ManufacturerID'].'">Update</a>
			<a href="deleteManufacturer.php?ManufacturerID='.$row5['ManufacturerID'].'">Delete</a>
		</td></tr>';
		$d5++;
	}
	mysqli_free_result($result5);

	if ($d5>0){
		echo '<table>'.join('',$data5).'</table>';
	}
	else {
		echo 'Sorry, data was not found';
	}

	mysqli_close($dbconnect);

?>

<h1 class="textupdate">Edit CATEGORY</h1>
<?php

	include('Login.php');

	$table6='category';

	$sql6="SELECT * FROM `".$table6."`";
	$result6=mysqli_query($dbconnect,$sql6);
	
	$data6=array();
	$d6=0;
	while($row6=mysqli_fetch_assoc($result6)){
		$dataFields6=array();

		while(list($key6,$value6)=each($row6)){
			$dataFields6[]='<td>'.$row6[$key6].'</td>';
			if ($d6==0){
				$dataKeys6[]='<th>'.$key6.'</th>';
			}
		}

		if ($d6==0){
			$data6[$d6]='<tr>'.join('',$dataKeys6).'<th>Actions</th></tr>';
			$d6++;
		}

		$data6[$d6]='<tr>'.join('',$dataFields6).'<td>
			<a href="update.php?CategoryID='.$row6['CategoryID'].'">Update</a>
			<a href="deleteCategory.php?CategoryID='.$row6['CategoryID'].'">Delete</a>
		</td></tr>';
		$d6++;
	}
	mysqli_free_result($result6);

	if ($d6>0){
		echo '<table>'.join('',$data6).'</table>';
	}
	else {
		echo 'Sorry, data was not found';
	}

	mysqli_close($dbconnect);

?>
</div>  
</body>
</html>
