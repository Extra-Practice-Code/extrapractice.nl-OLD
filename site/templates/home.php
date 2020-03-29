<?php snippet('header') ?>
<div class="container">
  <?php
  foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section)); }
  ?>

</div>
</body>
