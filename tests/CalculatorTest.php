<?php
use PHPUnit\Framework\TestCase;
require 'Comprobador.php';

class ComprobadorTests extends TestCase
{
    private $comprobador;
 
    protected function setUp()
    {
        $this->comprobador = new Comprobador();
    }
 
    protected function tearDown()
    {
        $this->comprobador = NULL;
    }
 
    public function testPair1()
    {
        $result = $this->comprobador->isPair(1);
        $this->assertEquals(false, $result);
    }

    public function testPair2()
    {
        $result = $this->comprobador->isPair(2);
        $this->assertEquals(true, $result);
    }
    public function testPair3()
    {
        $result = $this->comprobador->isPair(3);
        $this->assertEquals(false, $result);
    }

    public function testPair4()
    {
        $result = $this->comprobador->isPair(4);
        $this->assertEquals(true, $result);
    }
    public function testPair5()
    {
        $result = $this->comprobador->isPair(5);
        $this->assertEquals(false, $result);
    }
 
}
