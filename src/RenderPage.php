<?php

class RenderPage {

  private $title = 'Corollarium';

  public function teste(){
    return 'teste';
  }

  public function head(){
    $head = '<head><title>'.

      $this->title

      .'</title></head>';

    return $head;
  }

  public function title($title){

    $this->title = $title;

  }

  public function render(){

    $html = '<!DOCTYPE html>'.
      '<html>'.
        $this->head() .
        '<body>'.
          'teste'.
        '</body>'.
      '</html>';

    echo $html;


  }

  public function __get($title){
    if(property_exists($this, $title)){
      return $this->$title;
    }
  }
  //
  // public function __set($title, $value){
  //   if(property_exists($this, $title)){
  //     $this->$title = $value;
  //   }
  // }


} // end class RenderPage

 ?>
