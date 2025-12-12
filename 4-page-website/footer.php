<style>
	.links nav {

		@media(max-width: 385px) {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			row-gap: 0.3em;
		}
	}
		
	.links a {
		@media(max-width: 385px) {
			justify-felf: center;
			text-align: center;
		}
	}
}
</style>

<div class='links'>
	<nav>
		<a href='?page=welcome'>welcome</a>
		<a href='?page=contact'>contact</a>
		<a href='?page=favorite-foods'>favorite foods</a>
		<a href='?page=journal'>journal</a>
	</nav>
</div>