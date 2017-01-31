<?php

require 'vendor/autoload.php';

use RenderPage\Page;

$page = Page::getInstance();

//adiciona um título estilizado na página
// $page->setTitle('RenderPage');

//adiciona os arquivos .css na página, eles devem estar presentes no path assets/css
$css_files = array('main.css', 'bootstrap.min.css');
$page->setCssFiles($css_files);

//adiciona os arquivos .js na página, eles devem estar presentes no path assets/js
$js_files = array('jquery.min.js', 'bootstrap.min.js');
$page->setJsFiles($js_files);

//renderiza a página
$page->render();

?>
