<project-card id='<?= $id ?>'>
	<picture class='image'>
		<a href='?page=details&project=<?= $id ?>'>
			<img src='<?= $image ?>' alt='<?= $title ?> image'>
		</a>
	</picture>

	<h2 class='subtle-voice'><?= $title ?></h2>

	<a class='underline' href='?page=details&project=<?= $id ?>'>
		See more
	</a>
</project-card>

