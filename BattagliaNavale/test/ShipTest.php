<?php
namespace BattagliaNavale\Test;

use PHPUnit\Framework\TestCase;
use App\Controller\Ship;

class ShipTest extends TestCase
{
    /*
     * @dataProvider getInputColpito
    */
    public static function getInputColpito()
    {
        return [
            ['Patrol Boat', 2, ['a1', 'a2'], 'a1', 'colpito'],
            ['Submarine', 3, ['a3'], 'a3', 'affondata'],
            ['Carrier', 5, ['a1', 'a2', 'a3', 'a4', 'a5'], 'a6', 'acqua'],
        ];
    }

    public function testColpito($tipo, $lunghezza, $coordinate,$colpo, $expected)
    {
        $ship = new Ship($tipo, $lunghezza, $coordinate);
        $result = $ship->colpito($colpo);
        $this->assertEquals($expected, $result);
    }
        
        
    public function testAffondata() {
        $ship = new Ship('Patrol Boat', 2, ['a1', 'a2']);
        $ship->setAffondata();
        $result = $ship->colpito('a1');
        $this->assertEquals('già affondata', $result);
    }


    public static function getInputPosizione()
    {
        return [
            [['a1','a2'],true],
            [['a1','a2','b2'],false]

        ];
    }
            
    /**
     * @dataProvider getDataInput
     */
    public function testImpostaPosizione($coordinate, $expected) {
        $ship = new Ship('Patrol Boat', 2);
        $result = $ship->impostaPosizione($coordinate);
        $this->assertEquals($result , $expected);
    }

    /**
     * @dataProvider getDataInput
     */
    public function testVerificaVicinanza($coordinate, $expected){
        $ship = new Ship('Patrol Boat', 2);
        $result = $ship->verificaVicinanza($coordinate);
        $this->assertEquals($result , $expected);
    }


}