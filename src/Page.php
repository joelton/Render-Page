<?php

include_once('src/Singleton.php');

class Page extends Singleton{

  protected $title = 'Corollarium';
  protected $css_files = [];
  protected $js_files = [];

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



}

 ?>
