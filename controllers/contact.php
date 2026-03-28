<?php

	function contactPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData('pages/contact');

		$message = $_POST['message'] ?? '';
		$name = $_POST['name'] ?? '';
		$email = $_POST['email'] ?? '';
		$reply = '';

		
		if (isset($_POST['submitted'])) {

			if (is_numeric($message) || strlen($message) === 0) {
				$reply = "<p>Please enter some text</p>";
			} else {
				$post = ['Id' => uniqid(), 'name' => $name, 'message' => $message, 'email' => $email];

				$messages = getJsonData($page . 'data');

				$messages[] = $post;
				// array_push($messages, $post);

				$messageJson = json_encode($messages, JSON_PRETTY_PRINT);

				file_put_contents('data/contactdata.json', $messageJson);

				$reply = "<p>Message was sent!</p>";

			}
		}

		return view($page, [
		   'data' => $data,
		   'reply' => $reply,
         'name' => $name,
         'email' => $email,
         'message' => $message,
	  ]);
	}

?>