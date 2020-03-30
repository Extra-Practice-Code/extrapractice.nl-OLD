<?php snippet('header') ?>
<div class="container">
  <ul id="entries">
    <?php foreach($site->grandChildren() as $item): ?>
      <?php foreach($item->grandChildren() as $entry): ?>
        <li class="entry">
          <a href="<?= $entry->url() ?>">
            <div class="entry-title"><?= $entry->title() ?> </div>
            <div class="entry-author">by <?= $entry->author() ?></div>
            <div class="breadcrumbs">
              <?php $parents = $entry->parents();
              foreach($parents->not('school')->flip() as $parent):
                 if($parent->depth() == 2): ?>
                  <p><?= $parent->title() ?> /
                <?php else:?>
                  <?= $parent->title() ?></p>
                <? endif ?>
              <?php endforeach ?>
            </div>
          </a>
        </li>
    <?php endforeach ?>
    <?php endforeach ?>
  </ul>

</div>
</body>
