<?php

namespace RenderPage;

use RenderPage\Singleton;

class Page extends Singleton{

  private $title = 'Corollarium';
  private $css_files = [];
  private $js_files = [];

  //adiciona um título à página
  public function setTitle($title = ''){
    //atribui o valor passado por parâmetro se o mesmo não for vazio
    if($title != ''){
      $this->title = $title;
    }
  }

  //retorna o título da página
  public function getTitle(){
    return $this->title;
  }

  //atribui os arquivos .css passados por parâmetro na variável $css_files
  public function setCssFiles($files = ''){
    //verfica se o que foi passado por parâmetro é diferente de vazio
    if($files != ''){
      //verifica se o que foi passado por parâmetro é um array
      if(is_array($files)){
        foreach ($files as $key => $value) {
          if(is_string($value)){
            if(file_exists('assets/css/'.$value)){
              array_push($this->css_files, $value);
            }
          }
        }
      }else{
        if(is_string($files)){
          if(file_exists('assets/css/'.$files)){
            array_push($this->css_files, $files);
          }
        }
      }
    }

  }

  //retorna os arquivos .css adicionados
  public function getCssFiles(){
    return $this->css_files;
  }

  public function setJsFiles($files = ''){

    if($files != ''){
      if(is_array($files)){
        foreach ($files as $key => $value) {
          if(is_string($value)){
            if(file_exists('assets/js/'.$value)){
              array_push($this->js_files, $value);
            }
          }
        }
      }else{
        if(is_string($files)){
          if(file_exists('assets/js/'.$files)){
            array_push($this->js_files, $files);
          }
        }
      }
    }

  }

  //Retorna os arquivos .js adicionados
  public function getJsFiles(){
    return $this->js_files;
  }


  //Gera a tag head utilizando um template base
  public function header(){
    $title = $this->title;
    $css_files = $this->css_files;
    include_once('templates/header.php');
  }


  //Gera o corpo da página utilizando um template base
  public function page(){
    include_once('templates/page.php');
  }


  //Gera o rodapé utilizando um template base
  public function footer(){
    $js_files = $this->js_files;
    include_once('templates/footer.php');
  }

  //Renderiza a página
  public function render(){
    $this->header();
    $this->page();
    $this->footer();
  }

}

 ?>
