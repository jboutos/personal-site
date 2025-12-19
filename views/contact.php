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

<div class ='column'>
	<h1 class='attention-voice'><?= $title ?></h1>
	<p class='calm-voice'><?= $subtitle ?></p>
	<p class='calm-voice'><?= $subtitle2 ?></p>

	<form method='POST'>

		<div class='field'>
			<label for='name'><?= $name ?></label>
			<input id='name' type='text' name='name' value='<?php echo $name; ?>' required>
		</div>

		<div class='field'>
			<label for='message'><?= $label ?></label>
			<textarea id="message" name="message" value='<?php echo $message; ?>' required></textarea>
		</div>

		<button type='submit' name='submitted'><?= $button ?></button>

	</form>

	<?php if ($reply) echo $reply ?>

	<h2 class='careful-voice'><?= $links ?></h2>

	<?php include('footer.php') ?>
</div>