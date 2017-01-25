<!DOCTYPE html>
<html>

<head>

  <title><?php echo $title ?></title>

  <?php foreach ($css_files as $key => $value) : ?>
    <link rel="stylesheet" href="/assets/css/{$value}" media="screen" title="no title">
  <?php endforeach; ?>

</head>

<body>
  
