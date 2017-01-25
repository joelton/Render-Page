<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class indexTest extends TestCase{

  public function testTeste(){

    $this->assertEquals(
      'teste',
      RenderPage::teste()
    );

  }

}

 ?>
