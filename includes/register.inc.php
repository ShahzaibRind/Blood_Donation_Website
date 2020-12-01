<?php 
	
	if (isset($_POST['submit'])) {
		
		include_once 'dbh.inc.php';

		$cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$group = mysqli_real_escape_string($conn, $_POST['group']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);
		$mail = mysqli_real_escape_string($conn, $_POST['mail']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


		//Error Handlers
		//Check for empty fields

		if (empty($cnic) || empty($fname) || empty($lname) || empty($group) || empty($address) || empty($contact) || empty($mail) || empty($pwd)) {
			header("Location: ../register.php?register=empty");
			exit();

		} else {
		//Check if input characters are a valid
			if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
				header("Location: ../register.php?Register=invalid");
				exit();

			} else {
				//Check if email is valid
				if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../register.php?Register=email");
					exit();

				} else {
					$sql = "SELECT * FROM register WHERE cnic = '$cnic'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../register.php?Register=usertaken");
						exit();

					} else {
						//Hashing the password
						$hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

						//Insert the user data into the database
						$sql = "INSERT INTO register(cnic, firstname, lastname, bloodgroup,address,contact, email, password) VALUES('$cnic', '$fname', '$lname','$group', '$address', '$contact', '$mail', '$hasedPwd');";
						mysqli_query($conn, $sql);
						header("Location: ../search.php?Register=success"); 
						echo "Register Succesfull go to login";
						exit();
					}
				}
			}
		}
 
	} else {
		header("Location: ../register.php");
		exit();
	}
