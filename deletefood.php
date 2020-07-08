<?php 
	$id = $_POST['id'];
	// get jsonData from jsonfile
		$jsonData = file_get_contents('menulist.json');

		// convert into array from json
		$data_arr =json_decode($jsonData);
		unlink($data_arr[$id]->image);

		// array_push($data_arr, $student);
		//update
		//en 
		// unset($data_arr[$id]);
		array_splice($data_arr, $id, 1);

		// convert into json again
		$jsonData = json_encode($data_arr,JSON_PRETTY_PRINT);

		file_put_contents('menulist.json', $jsonData);

		header("location:menulist.php");
?>