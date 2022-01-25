<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    /** @test */
    public function estadoInicialItem(){

        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());

    }

    /** @test */
    public function testGetSetDescricao(){

        $descricao = 'Cadeira de Plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());

    }

    /** @test */
    public function testItemValido(){


        $item = new Item();
        //submeter um item valido para o test retornar OK
        $item->setValor(55);
        $item->setDescricao('Cadeira de Plástico');
        $this->assertEquals(true, $item->itemValido());
        //submeter um item invalido para o test retornar false (descricao)
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
        //submeter um item invalido para o test retornar false (valor)
        $item->setValor(0);
        $item->setDescricao('Cadeira de Plástico');
        $this->assertEquals(false, $item->itemValido());
        //
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }

    /**
     * @dataProvider dataValores
     * @test
     */
    public function testGetSetValor($valor){

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());

    }

    public function dataValores(){

        return [
            [100],
            [-2],
            [0],
            [5]
        ];
    }
}