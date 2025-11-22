<a id='password'></a>

<p>Known combinations include: John => user123!, Mary => user234!, Nathan => user345!</p>

<form action=index.php#password method='POST'>

	<h3>Password validator</h3>
	<p>Checks if the username matches the password</p>

	<div class='field'>
		<label for='username'>Username</label>
		<input id='username' type='text' name='username'>
	</div>

	<div class='field'>
		<label for='password'>Password</label>
		<input id='password' type='password' name='password' minlength='7'>
	</div>

	<button type='submit' name='password-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['password-submit'])) {

		if (isset($_POST['username'])) {
			$username = $_POST['username'];
		}

		if (isset($_POST['password'])) {
			$password = $_POST['password'];
		}

		if (strlen($username) == 0 || strlen($password) <= 6) {
			$output = "<p>Both fields must have values!</p>";
			echo $output;
			exit;
		}

		$users = ["John" => "user123!", "Mary" => "user234!", "Nathan" => "user345!"];

		$known = "user123!";

		//we need isset($users[$username]) here to check is the username exists in the array
		//otherwise we will get an error!
		if (isset($users[$username]) && $users[$username] == $password) {
			echo "<p>Welcome!</p>";
		} else {
			echo "<p>I don't know you.</p>";
		}

	}
?>