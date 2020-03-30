<?php snippet('header') ?>
<div class="container">
<section class="content">
  <article>
      <?php
        if($page->parentPost()->isNotEmpty()): ?>
        <div class="parent-post">
        <p>previous thread post</p>
          <a href="<?= $page->parentPost()->toPage()->url() ?>"><?= $page->parentPost()->toPage()->title() ?></a>
          </div>
        <?php endif; ?>

    <div class="cover-image">
      <?php
        // check if the image exists (although select in the field, the image might have been deleted)
        if($image = $page->coverimage()->toFile()): ?>
        <img src="<?= $image->url() ?>">
      <?php endif ?>
    </div>
    <div class="post-info">
      <div class="breadcrumbs">
        <?php $parents = $page->parents(); ?>
          <?php foreach($parents->not('school')->flip() as $parent): ?>
          <?php if($parent->depth() == 2): ?>
            <a href="<?= $parent->url() ?>"> <?= $parent->title() ?> </a> /
          <?php else: ?>
            <a href="<?= $parent->url() ?>"> <?= $parent->title() ?> </a>
          <?php endif ?>
          <?php endforeach ?>
      </div>
      <p class="title"><?= $page->title()->html() ?></p>
    </div>
    <div class="post-content">
      <p><?= $page->postText()->kirbytext() ?></p>
    </div>
    <hr
    <div class="article-footer">
      <p>
        <?= $page->sources()->kirbytext() ?>
      </p>
      <a class="back-button" href="<?= url('home') ?>">back</a>
    </div>

  </article>
</section>
</div>
</body>
