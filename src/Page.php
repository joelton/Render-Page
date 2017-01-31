<?php

namespace RenderPage;

use RenderPage\Singleton;

class Page extends Singleton{

  private $title = 'Corollarium';
  private $css_files = [];
  private $js_files = [];

  public function setTitle($title){
    $this->title = $title;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setCssFiles($files){
    if(is_array($files)){
      foreach ($files as $key => $value) {
        array_push($this->css_files, $value);
      }
    }else{
      array_push($this->css_files, $files);
    }
  }

  public function getCssFiles(){
    return $this->css_files;
  }

  public function setJsFiles($files){
    if(is_array($files)){
      foreach ($files as $key => $value) {
        array_push($this->js_files, $value);
      }
    }else{
      array_push($this->js_files, $files);
    }
  }

  public function getJsFiles(){
    return $this->js_files;
  }

  /**
  * Gera a tag head utilizando um template base
  */
  public function head(){

    $title = $this->title;
    $css_files = $this->css_files;

    include_once('templates/header.php');

  }

  /**
  * Gera o corpo da página utilizando um template base
  */
  public function page(){
    include_once('templates/page.php');
  }

  /**
  * Gera o rodapé utilizando um template base
  */
  public function footer(){
    $js_files = $this->js_files;
    include_once('templates/footer.php');
  }

  //Renderiza a página
  public function render(){
    $this->head();
    $this->page();
    $this->footer();
  }

}

 ?>
