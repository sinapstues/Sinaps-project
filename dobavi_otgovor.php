<?php
$servername = "127.0.0.1";
$username = "user_web";
$password = "";
$id_vapros=1;
$avtor="x";
$text="x";
$data_miss=array();

if (isset($_POST['submit'])){

	if(empty($_POST['vapros'])){

		$data_miss[]="vapros";
	}
	else{
		$id_vapros=trim($_POST['vapros']);
	}


	if(empty($_POST['avtor'])){

		$data_miss[]="avtor";
	}
	else{
		$avtor=trim($_POST['avtor']);
	}

	if(empty($_POST['text'])){

		$data_miss[]="text";
	}
	else{
		$text=trim($_POST['text']);
	}

if (empty($data_miss)) {
$conn = mysqli_connect($servername, $username, $password, "asktues");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$query="INSERT INTO otgovori1 (vapros, avtor, text) VALUES (?, ?, ?)";
$STATE=MYSQLI_PREPARE($conn,$query);
		 mysqli_stmt_bind_param($STATE,"iss",$id_vapros, $avtor, $text);
if (mysqli_STMT_EXECUTE($STATE)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);}}
?>
