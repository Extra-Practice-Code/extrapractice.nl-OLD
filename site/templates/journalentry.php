<?php snippet('header') ?>

<section class="content blogarticle">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('journal') ?>">Back…</a>

  </article>
</section>
