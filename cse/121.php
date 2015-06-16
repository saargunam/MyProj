<?php
	
	//require($_SERVER["DOCUMENT_ROOT"] . "/oss/config/db_config.php");
	$i = 0;
	$connection = mysql_connect("127.0.0.1","root","") 
	or die("Error !!! Not yet connected to DB");
	
	echo "Students details <br> ";
	mysql_select_db("ranjith", $connection);
	
	$query =mysql_query( "SELECT * FROM register")
	or die("SQL error ". mysql_error);
	
//	echo "Rollno-----------Name <br>";
		
	while($rows= mysql_fetch_array($query) )
	{
		echo $rows['username'] . " ". $rows['pwd']. " <br>";
	}
	mysql_query("INSERT INTO register VALUES('ran','van','van','magic@gmail.com','55555')");
?>