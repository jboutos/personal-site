<div class='remarks'>
    <h2 class='attention-voice remarks-title'><?= $heading ?></h2>
    <div class='remarks-content'>
        <?php foreach ($paragraphs as $paragraph) : ?>
            <p class='calm-voice'><?= $paragraph ?></p>
        <?php endforeach; ?>
        <div class='remarks-img'>
            <picture>
                <img src='<?= $imageOne ?>' alt=''>
            </picture>
            <picture>
                <img src='<?= $imageTwo ?>' alt=''>
            </picture>
        </div>
    </div>
</div>