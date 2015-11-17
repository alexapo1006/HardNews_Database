<!DOCTYPE html>
<html>
  <body>
    <?php 
	
      $db_hostname = 'localhost'; //Server Host name
      $db_username = 'kaviwmxf_admin'; //cPanel Username and created Database user
      $db_password = 'Admin123';	//cPanel Database Password
      $db_database = 'kaviwmxf_request_review'; //cPanel Username and created Database
	  
	    //Connect to server and check connection
       $dbconnect=mysqli_connect("$db_hostname", "$db_username", "$db_password");
          if (!$dbconnect) 
         {
            die("Unable to connect to host: " . mysqli_connect_error());
         }

       //Connect to database and check    
      $selectdb=mysqli_select_db($dbconnect,$db_database);
       if (!$selectdb)
       {
          die("Unable to connect to database: " . mysqli_connect_error());
        }
    ?>

  </body>
</html>
