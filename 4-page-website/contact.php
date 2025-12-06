<style>

	body {
		--color: hsl(296 70.7% 30.8%);
		--base: hsl(7 75.8% 93.5%);
		--hover: hsl(302 58.9% 80.7%);
		--button: hsl(296 70.7% 30.8%);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(7 75.8% 93.5%);
			--base: hsl(296 70.7% 30.8%);
			--hover: hsl(302 58.9% 64.7%);
			--button: hsl(296 70.7% 30.8%);
		}
	}

	body {
		background-color: var(--base);
	}

	h1, h2, p, a, li, label, li::marker {
		color: var(--color);
	}

	a:hover {
		background-color: var(--hover);
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
		box-shadow: rgba(14, 63, 126, 0.06) 0px 0px 0px 1px, rgba(42, 51, 70, 0.03) 0px 1px 1px -0.5px, rgba(42, 51, 70, 0.04) 0px 2px 2px -1px, rgba(42, 51, 70, 0.04) 0px 3px 3px -1.5px, rgba(42, 51, 70, 0.03) 0px 5px 5px -2.5px, rgba(42, 51, 70, 0.03) 0px 10px 10px -5px, rgba(42, 51, 70, 0.03) 0px 24px 24px -8px;
	}

	button {
		max-width: 120px;
		color: var(--button);
		border: 1px solid var(--color);
		box-shadow: rgba(14, 63, 126, 0.06) 0px 0px 0px 1px, rgba(42, 51, 70, 0.03) 0px 1px 1px -0.5px, rgba(42, 51, 70, 0.04) 0px 2px 2px -1px, rgba(42, 51, 70, 0.04) 0px 3px 3px -1.5px, rgba(42, 51, 70, 0.03) 0px 5px 5px -2.5px, rgba(42, 51, 70, 0.03) 0px 10px 10px -5px, rgba(42, 51, 70, 0.03) 0px 24px 24px -8px;
	}

	.links {
		display: block;
		margin-top: 1em;
	}

	p {
		margin-top: 1em;
	}

	p + p {
		margin-top: 0;
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
			$post = ['Id' => uniqid(), 'name' => $name, 'message' => $message];
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
