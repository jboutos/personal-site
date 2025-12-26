<?php

	function contactPage() {

		$page = pageNameFromFunction(__FUNCTION__);

		$message = $_POST['message'] ?? '';
		$name = $_POST['name'] ?? '';
		$reply = '';

		
		if (isset($_POST['submitted'])) {

			if (is_numeric($message) || strlen($message) === 0) {
				$reply = "<p>Please enter some text</p>";
			} else {
				$post = ['Id' => uniqid(), 'name' => $name, 'message' => $message];

				if (file_exists('messages.json')) {
					$messageData = file_get_contents("messages.json");
					$messages = json_decode($messageData, true);
				} else {
					$messages = [];
				}

				$messages[] = $post;

				$messageJson = json_encode($messages, JSON_PRETTY_PRINT);

				file_put_contents('messages.json', $messageJson);

				$reply = "<p>Message was sent!</p>";

			}
		}

		return view($page, [
		   'title' => 'Contact information',
		   'subtitle' => 'You can contact me at jgbout@yahoo.com',
		   'subtitle2' => 'Alternatively you can drop a message below (be kind)',
		   'nameLabel' => 'Name',
		   'label' => '(Any subject but shoelaces)',
		   'button' => 'Send message',
		   'links' => 'Introductory links',
		   'reply' => $reply,
         'name' => $name,
         'message' => $message
	  ]);
	}

?>