<style>
	@media(max-width: 385px) {
		nav {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			row-gap: 0.3em;
		}

		a {
			justify-self: start;
			align-self: start
		}
	}
</style>

<div class='links'>
	<nav>
		<a href='?page=welcome' class='<?php if ($page == "welcome") {echo "purple";} ?>'>welcome</a>
		<a href='?page=contact' class='<?php if ($page == "welcome") {echo "purple";} ?>'>contact</a>
		<a href='?page=favorite-foods' class='<?php if ($page == "welcome") {echo "purple";} ?>'>favorite foods</a>
		<a href='?page=journal' class='<?php if ($page == "welcome") {echo "purple";} ?>'>journal</a>
	</nav>
</div>