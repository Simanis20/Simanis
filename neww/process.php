<?php 
include('db.php');

$task=$_POST['task'];
$time=$_POST['time'];
$checked=$_POST['checked'];


if (isset($_POST['submit'])) {
	$sql="INSERT INTO todatbl(task,time) VALUES ('$task','$time')";
	$result=$con->query($sql);
	if ($result == TRUE) {
		header('location:index.php');
	}
	else{
		echo "error";
	}
}


if (isset($_POST['edit'])) {
	$id=$_POST['id'];
	$sql=" UPDATE todatbl SET task='$task',time='$time' WHERE id ='$id'";
	$result=$con->query($sql);
	if ($result == TRUE) {
		header('location:index.php');
	}
	else{
		echo "error";
	}
}


if (isset($_POST['id'])) {

	$id = $_POST['id'];

	if (empty($sql)) {
			echo 'error';
	} else {
			$todatbl = $conn->prepare("SELECT id, checked FROM todatbl WHERE id=?");
			$todatbl->execute([$id]);

			$todotb = $todatbl->fetch();
			$id = $todatb['id'];
			$checked = $toda['checked'];

			$uChecked = $checked ? 0 : 1;

			$result = $con->query("UPDATE todatbl SET checked=$uChecked WHERE id=$Id");

			if ($result) {
					echo $checked;
			} else {
					echo "error";
			};
		
	}
} else {
	header("location:index.php");
}
?>