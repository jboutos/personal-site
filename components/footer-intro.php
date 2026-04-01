<section class='footer-links' aria-labelledby='footer-links-heading'>
	<h2 class='careful-voice footer-heading' id='footer-links-heading'><?= $link2 ?></h2>

	<nav aria-labelledby='footer-links-heading'>
		<a class='underline' href='?page=welcome' <?= ($_GET['page'] ?? '') === 'welcome' ? 'aria-current="page"' : '' ?>><?= $link3 ?></a>
		<a class='underline' href='?page=contact' <?= ($_GET['page'] ?? '') === 'contact' ? 'aria-current="page"' : '' ?>><?= $link4 ?></a>
		<a class='underline' href='?page=journal' <?= ($_GET['page'] ?? '') === 'journal' ? 'aria-current="page"' : '' ?>><?= $link5 ?></a>
	</nav>
</section>