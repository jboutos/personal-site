<div class='image-description'>
    <picture class='details-image'>
        <a href='<?= $link ?>' target='_blank'>
            <img src='<?= "images/" . $image ?>' alt='<?= $title ?> image'>
        </a>
    </picture>
    <div class='description'>
        <h1 class='attention-voice'><?= $title ?></h1>
        <p class='calm-voice'><?= $body ?></p>
        <a class='underline' href='<?= $link ?>' target='_blank'>Go to exercise</a>
        <?php if (!empty($caseStudyLink)) : ?>
            <a class='underline' href='<?= $caseStudyLink ?>'>Go to case study</a>
        <?php endif; ?>
    </div>
</div>