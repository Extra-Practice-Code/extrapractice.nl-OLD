<?php snippet('header') ?>
<div class="header-container">
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
</div>
<div class="container">
  <iframe width="890" height="500" src="https://www.youtube.com/embed/1iyTGnV5Q8w?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <?php
  foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section)); }
  ?>

</div>
</body>
