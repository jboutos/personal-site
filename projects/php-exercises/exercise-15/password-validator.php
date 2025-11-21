<style>

	.field {
		display: flex;
		flex-direction: column;
	}

	form {
		max-width: 300px;
		background-color: lightgray;
		padding: 1em;
		border: 2px solid black;
	}

	button[type='submit'] {
		margin-top: 20px;
	}

	label {
		margin-bottom: 10px;
	}

	h3 {
		color: brown;
	}

</style>

<p>Known combinations include: John => user123!, Mary => user234!, Nathan => user345!</p>

<form method='POST'>

	<h3>Password validator</h3>
	<p>Please enter a username:</p>

	<div class='field'>
		<label>Username</label>
		<input type='text' name='username'>
	</div>

	<p>Please enter a password:</p>

	<div class='field'>
		<label>Password</label>
		<input type='password' name='password' minlength='7'>
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
			$output = "<p>Incorrect input</p>";
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