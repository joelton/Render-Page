<!DOCTYPE html>
<html>

<head>

  <title><?php echo $title ?></title>

  <?php foreach ($css_files as $key => $value) : ?>
    <link rel="stylesheet" href="assets/css/<?php echo $value ?>" media="screen" title="no title">
  <?php endforeach; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" charset="utf-8"></script>

</head>

<body>
