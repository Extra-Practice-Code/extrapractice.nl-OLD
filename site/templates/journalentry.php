<?php snippet('header') ?>
<div class="container">
<section class="content">
  <article>
    <div class="post-info">
      <p class="title"><?= $page->title()->html() ?></p>
      <p class="trail"><a href="/journal/department:<?= $page->department() ?>"><?= $page->department() ?></a> / <a href="/journal/course:<?= $page->course() ?>"><?= $page->course() ?></a></p>
    </div>
    <div class="post-content">
      <p><?= $page->postText()->kirbytext() ?></p>
    </div>
  </article>
  <a class="back-button" href="<?= url('home') ?>">&#x2190</a>
</section>
</div>
</body>
