<?php

include_once('src/RenderPage.php');

$page = RenderPage::getInstance();

$page->setTitle('IT Lean');

$css_files = array('main.css', 'bootstrap.min.css');
$page->setCssFiles($css_files);

$js_files = array('jquery.min.js', 'bootstrap.min.js');
$page->setJsFiles($js_files);

$page->render();

 ?>
