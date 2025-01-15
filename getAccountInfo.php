<?php 
session_start(); 
include "db_connect.php";

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['pnumber']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $pnumber = validate($_POST['pnumber']);
    $add = validate($_POST['eaddressmail']);
	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($fname)) {
		header("Location: index.php?error=First name is required");
	    exit();
	}else if(empty($lname)){
        header("Location: index.php?error=Last name is required");
	    exit();
	}else if(empty($pnumber)){
        header("Location: index.php?error=Phone number is required");
	    exit();
	}else if(empty($add)){
        header("Location: index.php?error=Address is required");
	    exit();
	}else if(empty($email)){
        header("Location: index.php?error=Email address is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
    


		$sqlEmail = "SELECT * FROM user WHERE email='$email'";
		$sqlEmailResult = mysqli_query($conn, $sqlEmail);

        $sqlNumber = "SELECT * FROM user WHERE telephone='$pnumber'";
		$sqlNumberResult = mysqli_query($conn, $sqlNumber);
       

		if (mysqli_num_rows($sqlEmailResult) === 0 && mysqli_num_rows($sqlNumberResult) === 0) {
            $newSqlRow = "INSERT INTO user (firstname, name, telephone, adresse, email, mdp) VALUES ('$fname', '$lname', '$pnumber', '$add', '$email', '$pass')";
            mysqli_query($conn, $newSqlRow);
		}else{
			header("Location: signIn.php?error=Email address or phone number already used");
	        exit();
		}
        
	}
	
}else{
	header("Location: index.php");
	exit();
}