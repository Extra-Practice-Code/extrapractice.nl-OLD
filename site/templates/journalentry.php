<?php snippet('header') ?>
<div class="container">
<section class="content">
  <article>
    <p class="title"><?= $page->title()->html() ?></p>
    <?= kirbytext($page->text()) ?>
  </article>
  <a class="back-button" href="<?= url('home') ?>">&#x2190</a>
</section>
</div>
</body>
