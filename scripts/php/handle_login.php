<!-- This script handle the login page, such that if user insert existing username and right password
he'll be redirected to main page -->
<?php 
	if(session_status() === PHP_SESSION_NONE) 
		session_start();
	require_once("config.php");
	require_once("displayMessageAndRedirect.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
		$result = mysqli_query($con, $query);
		
        if($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);	
			if($user_data['password'] === $password) {
				$_SESSION['username'] = $username;
				header("Location: ../../templates/main.php");
				die;
			} else { 
				displayMessageAndRedirect("Wrong username or password", "../../templates/login.php");
			}
		}
	}
	mysqli_close($con);
?>