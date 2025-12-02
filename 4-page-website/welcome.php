
<style>
	body {
		background-color: mistyrose;
	}

	h1 {
		color: #7f1786;
	}

	h2 {
		color: #7f1786;
	}

	p {
		color: darkmagenta;
	}

	li {
		color: darkmagenta;
	}

	li::marker {
		color: darkmagenta;
	}
</style>

<main>

	<div class='column'>

		<h1 class='loud-voice'>Hello people, have fun!</h1>

		<h2 class='attention-voice'>Introductory links</h2>

		<div class='links'>
			<ul>
				<li><a href='?page=favorite-foods' class='<?php if ($page == "welcome") {echo "purple";} ?>'>favorite foods</a></li>
				<li><a href='?page=contact' class='<?php if ($page == "welcome") {echo "purple";} ?>'>contact</a></li>
				<li><a href='?page=journal' class='<?php if ($page == "welcome") {echo "purple";} ?>'>journal</a></li>
			</ul>
		</div>

	</div>

</main>