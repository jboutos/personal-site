<?php include('config.php'); ?>

<div class='column header'>

	<a class='subtle-voice logo' href='<?=BASE_URL?>'>J.BOUTOS</a>

	<nav class='navigation' aria-label='Main navigation'>
		<a href='<?=BASE_URL?>' <?= empty($_GET['page']) ? 'aria-current="page"' : '' ?>>home</a>
		<a href='<?=BASE_URL?>?page=welcome' <?= ($_GET['page'] ?? '') === 'welcome' ? 'aria-current="page"' : '' ?>>about</a>
		<a href='<?=BASE_URL?>?page=contact' <?= ($_GET['page'] ?? '') === 'contact' ? 'aria-current="page"' : '' ?>>contact</a>
		<a href='<?=BASE_URL?>?page=projects' <?= ($_GET['page'] ?? '') === 'projects' ? 'aria-current="page"' : '' ?>>projects</a>
	</nav>
	
</div>
