<?php 
	session_start();
	require_once("config.php");
	require_once("displayMessageAndRedirect.php");

	if (isset($_SESSION['username'])) {
		header('Location: ../../templates/main.html');
		exit;
	}

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
		$result = mysqli_query($con, $query);
		
		if($result) {
            if($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);	

				if($user_data['password'] === $password) {
					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: ../../templates/main.php");
					die;
				}
			}
		} 
		displayMessageAndRedirect("Wrong username or password", "../../templates/login.php");
	}
	$_SESSION['username'] = $username;
	mysqli_close($con);
?>