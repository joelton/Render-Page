<?php

use PHPUnit\Framework\TestCase;
use RenderPage\Page;
use RenderPage\Singleton;

final class pageTest extends TestCase{

  protected $page = null;

  public function setUp(){
    $this->page = Page::getInstance();
  }

  public function testSingleton(){

    #verifica se a instância do objeto $page2 é a mesma do objeto $this->page
    $page2 = Page::getInstance();

    $this->assertEquals(
      $this->page,
      $page2
    );

    #verifica se a instância do objeto $this->page é da classe Singleton
    $this->assertInstanceOf(
      Singleton::class,
      $this->page
    );

  }

  #testa a inserção de título
  public function testGetSetTitle(){

    #verifica se o valor default do title é Corollarium
    $this->assertEquals(
      'Corollarium',
      $this->page->getTitle()
    );

    #não deve aceitar um parâmetro vazio
    $title = '';
    $this->page->setTitle($title);

    $this->assertEquals(
      'Corollarium',
      $this->page->getTitle()
    );

    #deve retornar o novo título atribuído
    $title = 'RenderPage';
    $this->page->setTitle($title);

    $this->assertEquals(
      $title,
      $this->page->getTitle()
    );

  }

  #testa a inserção de arquivos .css
  public function testGetSetCssFiles(){

    #a viarável $css_files deve estar vazia
    $this->assertEmpty(
      $this->page->getCssFiles()
    );

    #não deve aceitar uma string vazia
    $css_files = '';
    $this->page->setCssFiles($css_files);

    $this->assertEmpty(
      $this->page->getCssFiles()
    );

    #não deve aceitar um inteiro
    $css_files = 1;
    $this->page->setCssFiles($css_files);

    $this->assertEmpty(
      $this->page->getCssFiles()
    );

    #não deve aceitar um arquivo que não existe no path assets/css
    $css_files = 'teste.css';
    $this->page->setCssFiles($css_files);

    $this->assertEmpty(
      $this->page->getCssFiles()
    );

    #deve aceitar um único path de arquivo
    $css_files = 'main.css';
    $this->page->setCssFiles($css_files);

    $this->assertNotEmpty(
      $this->page->getCssFiles()
    );

    #deve aceitar multiplos paths de arquivos
    $css_files = array('main.css', 'bootstrap.min.css');
    $this->page->setCssFiles($css_files);

    $this->assertNotEmpty(
      $this->page->getCssFiles()
    );

    //verifica se existe mais de 1 item no array
    $this->assertGreaterThan(
      1, sizeof($this->page->getCssFiles())
    );

  }

  #testa a inserção de arquivos .js
  public function testSetJsFiles(){

    #a variável $js_files deve estar vazia inicialmente
    $this->assertEmpty(
      $this->page->getJsFiles()
    );

    #não deve aceitar uma string vazia
    $js_files = '';
    $this->page->setJsFiles($js_files);

    $this->assertEmpty(
      $this->page->getJsFiles()
    );

    #não deve aceitar um inteiro
    $js_files = 1;
    $this->page->setJsFiles($js_files);

    $this->assertEmpty(
      $this->page->getJsFiles()
    );

    #não deve aceitar um arquivo que não existe no path assets/js
    $js_files = 'teste.js';
    $this->page->setJsFiles($js_files);

    $this->assertEmpty(
      $this->page->getJsFiles()
    );

    #deve aceitar um único path de arquivo
    $js_files = 'main.js';
    $this->page->setJsFiles($js_files);

    $this->assertNotEmpty(
      $this->page->getJsFiles()
    );

    #deve aceitar multiplos paths de arquivos
    $js_files = array('jquery.min.js', 'bootstrap.min.js');
    $this->page->setJsFiles($js_files);

    $this->assertNotEmpty(
      $this->page->getJsFiles()
    );

    //verifica se existe mais de um item no array
    $this->assertGreaterThan(
      1, sizeof($this->page->getJsFiles())
    );

  }

  public function testTemplatesExists(){
    //verifica se o arquivo de template header.php existe
    $this->assertFileExists('templates/header.php');

    //verifica se o arquivo de template page.php existe
    $this->assertFileExists('templates/page.php');

    //verifica se o arquivo de template footer.php existe
    $this->assertFileExists('templates/footer.php');
  }

}

 ?>
