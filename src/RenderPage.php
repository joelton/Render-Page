<?php

class RenderPage {

  private $title = 'Corollarium';
  private $css_files = [];
  private $js_files = [];

  public function teste(){
    return 'teste';
  }

  public function head(){

    $title = $this->title;
    $css_files = $this->css_files;
    include_once('templates/header.php');

  }

  public function main(){

    include_once('templates/main.php');

  }

  public function footer(){

    $js_files = $this->js_files;
    include_once('templates/footer.php');

  }

  public function addCssFile($file_name){

    array_push($this->css_files, $file_name);

  }

  public function addJsFile($file_name){

    array_push($this->js_files, $file_name);

  }

  public function title($title){

    $this->title = $title;

  }

  public function render(){

      $this->head();
      $this->main();
      $this->footer();

  }

}

 ?>
