<section id="journal-list">
  <ul id="entries">
    <?php foreach($data->children()->visible() as $entry):?>

      <a href="<?= $entry->url() ?>">
      <li class="entry">
        <div class="entry-title"><?= $entry->title()->html() ?> </div>
        <div class="entry-author">by <?= $entry->author()->html() ?></div>
        <div class="trail"><p><?php foreach(str::split($entry->department()) as $department): ?>
          <a  href="<?php echo url('journal/' . url::paramsToString(['department' => $department])) ?>">
            <?php echo html($department) ?>
          </a>
        <?php endforeach ?> /
        <?php foreach(str::split($entry->course()) as $course): ?>
          <a  href="<?php echo url('journal/' . url::paramsToString(['course' => $course])) ?>">
            <?php echo html($course) ?>
          </a>
        <?php endforeach ?></p></div>
      </li>
    </a>
    <?php endforeach ?>
  </ul>
</section>
