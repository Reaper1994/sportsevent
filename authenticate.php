<?php

session_start();

/*session_destroy();*/

    if ( ! empty( $_POST ) ) {
    	if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli('localhost', 'root', '', 'sports');

        $stmt = $con->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->bind_param('s', $_POST['username']);//used to prevent sql injections
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();


     	// Verify user password and set $_SESSION
    	if (password_verify( $_POST['password'], mysqli_real_escape_string($con, $user->password))) {
    		$_SESSION['user_id'] = $user->id;
    	
    	}
    }
}

if ( isset( $_SESSION['user_id'] ) ) {
	header("Location:adminindex.php");
} else {
    // Redirect them to the login page

    header("Location:login.php");
}



?>