<?php snippet('header') ?>
<div class="container">
  <div class="top-bar">
    <div class="info">
      <?= $page->text()->kirbytext() ?>
    </div>
    <div class="contact">
      <ul>
        <li>
          <a href="mailto:<?= page('contact')->email(); ?>">Email</a>
        </li>
        <li>
          <a href="<?= page('contact')->instagram()->url(); ?>">Instagram</a>
        </li>
        <li>
          <a href="<?= page('contact')->arena()->url(); ?>">Are.na</a>
        </li>
      </ul>
    </div>
  </div>

  <?php
  foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section)); }
  ?>

</div>
</body>
