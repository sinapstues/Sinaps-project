<?php
$avtor="gogo";
$tema="savi";
$vapros="can yoy fy";


if (isset($_POST['submit'])) {
	
	$data_miss=array();

	if(empty($_POST['avtor'])){

		$data_miss[]="avtor";
	}
	else{
		$avtor=trim($_POST['avtor']);
	}


	if(empty($_POST['tema'])){

		$data_miss[]="tema";
	}
	else{
		$tema=trim($_POST['tema']);
	}

	if(empty($_POST['vapros'])){

		$data_miss[]="vapros";
	}
	else{
		$vapros=trim($_POST['vapros']);
	}
	if (empty($data_miss)) {
		$dbc = mysqli_connect("127.0.0.1", "user_web", "", "asktues");
		$query = "INSERT INTO vaprosi(zaglavie,avtor,text)
			VALUES (?, ?, ?)";
		$STATE=MYSQLI_PREPARE($dbc,$query);
		 mysqli_stmt_bind_param($STATE,"sss",$tema,$avtor,$vapros);
		mysqli_STMT_EXECUTE($STATE);
		$affected_rows = mysqli_stmt_affected_rows($STATE);
		if ($affected_rows==1) {
			    mysqli_close($dbc);
		}
		else {
			mysqli_close($dbc);
		}
 }} ?>
