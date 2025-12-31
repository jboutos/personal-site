
<articles-intro>

  <header>
    <h2 class='attention-voice'>The Merino Journal</h2>

    <p class='calm-voice'>Explore stories, insights, and ideas shaped by merino wool — from craftsmanship and care to the natural qualities that make it exceptional.</p>
  </header>

  <article-grid>
    <?php include('articles_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($database as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
