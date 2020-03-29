<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $entry = $page->children()->visible()->flip();

  // add the tag filter
  if($course = param('course')) {
    $entry = $entry->filterBy('course', $course, ',');
  }

  if($department = param('department')) {
    $entry = $entry->filterBy('department', $department, ',');
  }

  // fetch all tags
  $departments = $entry->pluck('departments', ',', true);

  // fetch all tags
  $courses = $entry->pluck('courses', ',', true);

  // apply pagination
  $entry   = $entry->paginate(10);
  $pagination = $entry->pagination();

  return compact('entry', 'departments', 'courses', 'department', 'course', 'pagination');

};
