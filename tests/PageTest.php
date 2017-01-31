<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class pageTest extends TestCase{

  protected $page = null;

  public function setUp(){
    $this->page = Page::getInstance();
  }

  public function testSingleton(){

    $this->assertInstanceOf(
      'Singleton',
      $page
    );

    $this->assertEquals(
      $page,
      Page::getInstance()
    );

  }

  #testa a inserção de arquivos .css
  public function testSetCssFiles(){

    $page = Page::getInstance();

    #a viarável $css_files deve estar vazia
    $this->assertEmpty(
      $page->getCssFiles()
    );

    $css_files = 'file';
    $page->setCssFiles($css_files);

    #a variável $css_files deve conter os valores atribuídos
    $this->assertNotEmpty(
      $page->getCssFiles()
    );

    $css_files = array('file1', 'file2');
    $page->setCssFiles($css_files);

    #a variável $css_files deve conter os valores atribuídos
    $this->assertNotEmpty(
      $page->getCssFiles()
    );

  }

  #testa a inserção de arquivos .js
  public function testSetJsFiles(){

    $page = Page::getInstance();

    #a variável $js_files deve estar vazia
    $this->assertEmpty(
      $page->getJsFiles()
    );

    $js_files = 'file';
    $page->setJsFiles($js_files);

    #a variável $js_files deve conter os valores atribuídos
    $this->assertNotEmpty(
      $page->getJsFiles()
    );

    #a variável $js_files deve conter os valores atribuídos
    $js_files = array('file1', 'file2');
    $page->setJsFiles($js_files);

    $this->assertNotEmpty(
      $page->getJsFiles()
    );

  }

  public function testSetTitle(){
    $this->assertEquals(
      'Corollarium',
      $this->page->getTitle()
    );

    $title = 'RenderPage';

    $this->page->setTitle($title);

    $this->assertEquals(
      $title,
      $this->page->getTitle()
    );

  }

}

 ?>
