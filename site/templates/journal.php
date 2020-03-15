<?php snippet('header') ?>
<body>
  <div class="journal-container">
    <section class="content blog">

      <h1><?= $page->title()->html() ?></h1>
      <?= $page->text()->kirbytext() ?>

      <?php foreach($page->children()->visible()->flip() as $article): ?>

      <div class="article-entry">
        <h1><?= $article->title()->html() ?></h1>
        <p><?= $article->text()->excerpt(200) ?></p>
        <a href="<?= $article->url() ?>">Read more…</a>
      </div>

      <?php endforeach ?>

    </section>
  </div>
</body>
