<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $site->description() ?>">
  <meta name="keywords" content="<?= $site->keywords() ?>">
  <title><?= $site->title() ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="theme-color" content="#ffffff">
  <?= css('assets/css/index.css') ?>
  <?= js('assets/js/script.js') ?>
  <?= js('assets/js/jquery.min.js') ?>
</head>
<body>
  <div class="header-container">
    <div class="top-bar">
      <div class="info">
        <?= $pages->find('home')->text()->kirbytext() ?>
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
