<?php  

	session_start();
	
	if (isset($_POST['submit'])) {
		
		include_once 'dbh.inc.php';

		$mail = mysqli_real_escape_string($conn, $_POST['mail']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Error Handlers

		//Check if inputs are empty

		if (empty($mail) || empty($pwd)) {
			header("Location: ../login.php?login=empty");
			exit();

		} else {
			$sql = "SELECT * FROM register WHERE email = '$mail'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
				header("Location: ../login.php?login=error");
				exit();

			} else {

				if ($row = mysqli_fetch_assoc($result)) {
					//De-Hashing of the password
					$hashedPwdCheck = password_verify($pwd, $row['password']);

					if ($hashedPwdCheck == false ) {
						header("Location: ../login.php?login=error");
						exit();
					} elseif($hashedPwdCheck == true) {
						//Login in the user here
						$_SESSION['cnic'] = $row['cnic'];
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['bloodgroup'] = $row['dept'];
						$_SESSION['address'] = $row['batch'];
						$_SESSION['contact'] = $row['email'];
						$_SESSION['email'] = $row['username'];
						header("Location: ../index.php?login=success");

					}  
				}
			}
		}
	}
	else {
		header("Location: ../index.php?login=error");
		exit();
	}