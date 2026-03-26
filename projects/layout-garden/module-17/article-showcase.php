<?php
$articles = [
	['backgroundClass' => 'background', 'month' => 'JLY', 'day' => '20', 'year' => '2020', 'heading' => 'Level 4', 'description' => 'Lorem ipsum dolor sit amet...',],
	['backgroundClass' => 'background-2', 'month' => 'JLY', 'day' => '20', 'year' => '2020', 'heading' => 'Level 4', 'description' => 'Lorem ipsum dolor sit amet...',],
	['backgroundClass' => 'background-3', 'month' => 'JLY', 'day' => '20', 'year' => '2020', 'heading' => 'Level 4', 'description' => 'Lorem ipsum dolor sit amet...',]
];
?>

<article-showcase class='wrapper'>
	<inner-column>
		<div class='info'>
			<h1 class='loud-voice'>Heading level 1</h1>
			<hr>
			<p class='calm-voice'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<a href='#'>Read More</a>
		</div>
		<div class='container'>
			<?php foreach($articles as $article):
				extract($article); include('components/article-card.php');
			endforeach; ?>
		</div>
	</inner-column>
</article-showcase>