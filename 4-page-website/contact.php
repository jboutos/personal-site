<style>
	body {
		background-color: mistyrose;
	}

	h1, h2 {
		color: #7f1786;
	}

	p, a, li, label, li::marker {
		color: darkmagenta;
	}

	a:hover {
		background-color: orchid;
	}

	.field {
		display: flex;
		flex-direction: column;
		max-width: 400px;
	}

	textarea#message {
	    min-height: 300px;
	    padding: 10px;
	}

	form {
		display: flex;
		flex-direction: column;
		gap: 15px;
		margin-top: 20px;
	}

	input, textarea {
		border: 1px solid darkmagenta;
		font-size: 1rem;
	}

	button {
		max-width: 120px;
	}

	.links {
		display: block;
		margin-top: 1em;
	}

	p {
		margin-top: 1em;
	}
</style>

<?php

	$message = $_POST['message'] ?? '';
	$name = $_POST['name'] ?? '';
	$reply = '';

	
	if (isset($_POST['submitted'])) {

		if (is_numeric($message) || strlen($message) == 0) {
			echo "<p>Please enter some text</p>";
		} else {
			$post = ['Id' => uniqid(),'name' => $name, 'message' => $message];
			$reply = "<p>Message was sent!</p>";

			if (file_exists('messages.json')) {
				$messageData = file_get_contents("messages.json");
				$messages = json_decode($messageData, true);
			} else {
				$messages = [];
			}

			$messages[] = $post;

			$messageJson = json_encode($messages, JSON_PRETTY_PRINT);

			file_put_contents('messages.json', $messageJson);

		}
	}
?>


<main>

   <div class ='column'>
		<h1 class='attention-voice'>Contact information</h1>
		<p class='calm-voice'>You can contact me at jgbout@yahoo.com</p>
		<p class='calm-voice'>Alternatively you can drop a message below (be kind)</p>

		<form method='POST'>

			<div class='field'>
				<label for='name'>Name</label>
				<input id='name' type='text' name='name' value='<?php echo $name; ?>' required>
			</div>

			<div class='field'>
				<label for='message'>(Any subject but shoelaces)</label>
				<textarea id="message" name="message" value='<?php echo $message; ?>' required></textarea>
			</div>

			<button type='submit' name='submitted'>Send message</button>

		</form>

		<?php if ($reply) echo $reply ?>

		<h2 class='careful-voice'>Introductory links</h2>
		
		<?php include('footer.php') ?>

   </div>
</main>
