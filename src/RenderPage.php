<?php

include_once('src/Page.php');

class RenderPage extends Page{

  /*
  * Gera a tag head utilizando um template base
  */

  public function head(){

    $title = $this->title;
    $css_files = $this->css_files;

    include_once('templates/header.php');

  }

  /*
  * Gera a page utilizando um template base
  */

  public function main(){
    include_once('templates/main.php');
  }

  /*
  * Gera o rodapé utilizando um template base
  */

  public function footer(){
    $js_files = $this->js_files;
    include_once('templates/footer.php');
  }

  public function render(){
      $this->head();
      $this->main();
      $this->footer();
  }

}

 ?>
