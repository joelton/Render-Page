<?php

include_once('src/RenderPage.php');

$page = new RenderPage();
// $page->title('IT Lean');
$page->addCssFile('main.css');
$page->addJsFile('main.js');
$page->render();

 ?>
