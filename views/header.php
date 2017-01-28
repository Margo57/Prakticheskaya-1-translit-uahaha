<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Test</title>
  <link rel="stylesheet" href="public/css/default.css">
</head>
<body>
<?php Session::init(); ?>
<header>
<<<<<<< HEAD
  <nav>
    <ul>
      <li><a href="<?php echo URL; ?>index">Index</a></li>
      <li><a href="<?php echo URL; ?>help">Help</a></li>
      <li><a href="<?php echo URL; ?>login">Login</a></li>
      <li>
        <?php if(Session::get('loggedId') == true): ?>
        <a href="<?php echo URL; ?>dashboard/logout">Выйти</a>
        <?php else: ?>
        <a href="<?php echo URL; ?>login">Войти</a>
      <?php endif; ?>
      </li>
    </ul>
  </nav>
=======
  header
>>>>>>> parent of 6d02d5a... Начинается какая-то дичь с контроллерами.
</header>
<section>
