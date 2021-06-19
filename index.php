

<html>
 <head>
 
    <meta charset="utf-8">
	<title>GOKUL</title>
	<link href="style.css" rel="stylesheet">
	
 </head>
 <body >
 
 	<script src="script.js"> </script>
  
  <h1>
  
 	<?php
	
	$conn = mysqli_connect('localhost:3307', 'gokul', 'test123', 'myname');
     
	 if(!$conn){
		 echo 'Connection error: ' . mysqli_connect_error(); 
	 }

	$sql = "select * from name";
	$result = $conn -> query($sql);
	
	if ($result -> num_rows >0){
		while ($row = $result -> fetch_assoc()) {
	echo "<tr><td>" . $row["name"] . "</tr></td>";
		}
	}
	
	$conn -> close();
	
    ?>
	
  </h1>

</body>
</html>
