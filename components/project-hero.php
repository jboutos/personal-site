<article id='main-content' class='' aria-label='Short description about <?= $title ?>'>
    <div class='image-description'>
        <picture class='details-image'>
            <img src='<?= "images/" . $image ?>' alt='<?= $title ?> image'>
        </picture>
        <div class='description'>
            <h1 id='card-title-<?= $id ?>' class='attention-voice'><?= $title ?></h1>
            <p class='calm-voice'><?= $body ?></p>
            <a class='underline' aria-label='Go to exercise (opens in new tab)' href='<?= $link ?>' target='_blank'>Go to exercise</a>
            <?php if (!empty($caseStudyLink)) : ?>
                <a class='underline' aria-label='Go to case study (opens in new tab)' href='<?= $caseStudyLink ?>'>Go to case study</a>
            <?php endif; ?>
        </div>
    </div>