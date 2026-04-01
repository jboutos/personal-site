<article class='image-description' aria-labelledby='card-title-<?= $id ?>'>
    <picture class='details-image'>
        <a href='<?= $link ?>' target='_blank'>
            <img src='<?= "images/" . $image ?>' alt='<?= $title ?> image'>
        </a>
    </picture>
    <div class='description'>
        <h1 id='card-title-<?= $id ?>' class='attention-voice'><?= $title ?></h1>
        <p class='calm-voice'><?= $body ?></p>
        <a class='underline' aria-label='Go to exercise (opens in new tab)' href='<?= $link ?>' target='_blank'>Go to exercise</a>
        <?php if (!empty($caseStudyLink)) : ?>
            <a class='underline' aria-label='Go to exercise (opens in new tab)' href='<?= $caseStudyLink ?>'>Go to case study</a>
        <?php endif; ?>
    </div>
</article>