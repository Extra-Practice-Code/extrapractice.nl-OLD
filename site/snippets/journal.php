<section id="journal-list">

  <ul id="entries">
    <?php foreach($data->children()->visible() as $entry): ?>
      <hr />
      <a href="<?= $entry->url() ?>">
      <li class="entry" <?= $entry->bgcolor() ?>>
        <div class="entry-title"><?= $entry->title()->html() ?> </div>
        <div class="entry-author">by <?= $entry->author()->html() ?></div>
        <div class="entry-excerpt"><?= $entry->text()->excerpt(300) ?></div>
      </li>
    </a>
    <?php endforeach ?>
  </ul>
</section>
