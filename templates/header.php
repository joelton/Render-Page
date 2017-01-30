<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title ?></title>

  <?php foreach ($css_files as $key => $value) : ?>
    <link rel="stylesheet" href="assets/css/<?php echo $value ?>" media="screen" title="no title">
  <?php endforeach; ?>

</head>

<body>
