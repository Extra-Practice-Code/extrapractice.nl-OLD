<section id="journal-entries">
  <h1><?= $data->title()->html() ?></h1>
  <?= $data->text()->kirbytext() ?>

  <ul>
    <?php foreach($data->children()->visible() as $entry): ?>
      <li class="entry" style="background-color: <?= $entry->bgcolor() ?>;" onclick="revealExcerpt()">
        <div class="entry-title"><?= $entry->title()->html() ?> </div>
        <div class="entry-author">by <?= $entry->author()->html() ?></div>
        <div class="entry-excerpt"><p><?= $entry->text()->excerpt(300) ?></p></div>
      </li>
    <?php endforeach ?>
  </ul>
</section>
