<?php snippet('header') ?>
<div class="container">
<section class="content">

  <ul>
    <?php foreach($site->Children() as $item): ?>
    <li>
      <a href="<?= $item->url() ?>">
        <?= $item->title()->html() ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>


    </section>
  </div>
</body>
