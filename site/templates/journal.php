<?php snippet('header') ?>
<div class="container">
<section class="content">

  <?php
  foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section)); }

  if($tag = param('course')) {
    $entry = $entry->filterBy('course', $course, ',');
}

  if($tag = param('department')) {
    $entry = $entry->filterBy('department', $department, ',');
    }?>


    </section>
  </div>
</body>
