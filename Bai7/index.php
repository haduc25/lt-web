<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><Bai7></Bai7></title>
</head>
<body>
	<?php 
	  require './config/connect.php';

	  $sql = mysqli_query($conn, "SELECT * FROM `news`");
	  // var_dump($sql); exit;

      while ($row = mysqli_fetch_array($sql))
      {
      	echo "ID: " . $row['id'] . "<br>";
      	echo "Title: " . $row['title'] . "<br>";
      	echo "Content: " . $row['content'] . "<br>";
      	echo "Image: " . $row['image'] . "<br>";
      	echo "Time Create: " . $row['time_created'] . "<br>";
      	echo "Time Update: " . $row['time_updated'] . "<br>";
      }
	?>
</body>
</html>