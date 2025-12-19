<li class='projects'>
	<project-card id='<?= $id ?>'>
		<picture class='image'>
			<img src='<?= $image ?>' alt='<?= $title ?> image'>
		</picture>

		<h2 class='subtle-voice'><?= $title ?></h2>

		<a href='?page=details&project=<?= $id ?>'>
			See more
		</a>
	</project-card>
</li>
