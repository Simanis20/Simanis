<?php 
	include('db.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>To Do list</title>

</head>
<body>
<nav class="container-fluid bg-dark p-3">
	<h3 class="text-white">To Do List</h3>
</nav>
<div class="container">
	<form method='POST' action='process.php' onsubmit="return">
	<?php 

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql="SELECT * FROM todatbl WHERE id='$id'";
		$res=$con->query($sql);
		if ($res == TRUE) {
		while ($edit=$res->fetch_assoc()) {
			
			echo "<div class='row my-5 ml-5 container'>
  <input  class='form-control' type='text' value='".$edit['task']."'' style='width:70%;' name='task' placeholder='Enter Task' required>
  
  <input type='time' value=".$edit['time']." name='time' required>
  <input type = 'text' value=".$edit['id']." name='id' style='display:none;'>
  
	<button name='edit' class='btn btn-success'></i>Update</button>";
			}
		}
		
	}
	else{
			echo "
		<div class='row my-5 ml-5 container'>
	<input class='form-control' type='text' style='width:70%;' name='task' placeholder='Todo list' required>
	<input type='time' name='time' required>
	<button name='submit' class='btn btn-success'></i>Save</button>";
		}

	?>
	</div>
	</form>

<div class="container">
<table class="table table-striped">
	<tr>
		<th>Task</th>
		<th>Time</th>
		<th></th>
	</tr>
	<?php

	$query="SELECT * FROM todatbl ORDER BY time DESC";
	$result=$con->query($query);
	while ($row=$result->fetch_assoc()) {
		
	echo "
	<tr>
	<td><input type='checkbox'> ".$row['task']. "</td>
		<td>".$row['time']."</td>
		<td><a href='index.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
		<a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
	</tr>";
	}


	?>
</table>
</div>
</div>
</body>
</html>