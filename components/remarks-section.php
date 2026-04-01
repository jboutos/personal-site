<section class='remarks'>
    <h2 class='attention-voice remarks-title'><?= $heading ?></h2>
    <div class='remarks-content'>
        <?php foreach ($paragraphs as $paragraph) : ?>
            <p class='calm-voice'><?= $paragraph ?></p>
        <?php endforeach; ?>
        <div class='remarks-img'>
            <?php foreach ($images as $image) : ?>
                <picture>
                    <img src='<?= "images/" . $image['src'] ?>' class='clickable-img' alt='<?= $image['alt'] ?>'>
                </picture>
            <?php endforeach; ?>
        </div>
    </div>
</section>