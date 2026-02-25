<div class="column">

    <h1 class="attention-voice"><?= $title ?></h1>

    <?php if (!empty($subtitle)) { ?>
        <h2 class="careful-voice"><?= $subtitle ?></h2>
    <?php } ?>

    <?php
    if (!empty($welcome)) { ?>

        <p class="calm-voice">
            <?= $description ?>
            <a href="<?= $linkUrl ?>" target="_blank" class="substack">
                <?= $linkText ?>
            </a>
            <?= $descriptionCompl ?>
        </p>

        <h2 class="careful-voice"><?= $link2 ?></h2>

        <div class="hello-container">
            <?php include('modules/waving-hand.php'); ?>
        </div>

    <?php
    } elseif (!empty($journal)) { ?>

        <ul>
            <?php foreach ($journal as $entry) { ?>
                <li>
                    <h2 class="careful-voice"><?= $entry['date'] ?></h2>
                    <p class="calm-voice"><?= $entry['observations'] ?></p>
                </li>
            <?php } ?>
        </ul>

    <?php
    } elseif (!empty($goals)) { ?>

        <?php foreach ($goals as $proximity) { ?>
            <h2 class="careful-voice"><?= $proximity['title'] ?></h2>
            <ul class="goals">
                <?php foreach ($proximity['goals'] as $goal) { ?>
                    <li><?= $goal ?></li>
                <?php } ?>
            </ul>
        <?php } ?>

    <?php
    } elseif (!empty($data)) { ?>

        <ul>
            <?php foreach ($data as $item) { ?>
                <li>
                    <?= component($component, $item); ?>
                </li>
            <?php } ?>
        </ul>

    <?php } ?>

    <?php if (!empty($links)) { ?>
        <h2 class="careful-voice"><?= $links ?></h2>
    <?php } ?>

    <?php if (!empty($footer)) {
        include('modules/footer.php');
    } ?>

</div>