<?php 

// $profile = $_POST['profile'];
$name	 = $_POST['name'];
$price	 = $_POST['price'];
$profile = $_FILES['profile'];
// string
$profilename =$profile['name'];
// kid.jpg
$basepath  = 'photo/';
$fullpath = $basepath.$profilename;
// photo/kid.jpg
move_uploaded_file($profile['tmp_name'],$fullpath);

$menu = array(
	"name" => $name,
	"price" => $price,
	"profile" => $fullpath
);

// var_dump($student);

// get jsonData from jsonfile
$jsonData = file_get_contents('menulist.json');
if (!$jsonData) {
	$jsonData = '[]';
}
// convert into array from json
$data_arr =json_decode($jsonData);
// string
array_push($data_arr, $menu);
// json format
$jsonData = json_encode($data_arr,
	JSON_PRETTY_PRINT);

file_put_contents('menulist.json', $jsonData);

header("location:index.php");


 ?>