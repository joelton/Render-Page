<?php

class RenderPage {

  private $title = 'Corollarium';

  public function teste(){
    return 'teste';
  }

  public function head(){

    $title = $this->title;
    include_once('templates/header.php');

  }

  public function main(){

    include_once('templates/main.php');

  }

  public function footer(){

    include_once('templates/footer.php');

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
