<?php
namespace BattagliaNavale\Test;

use PHPUnit\Framework\TestCase;
use App\Controller\Ship;

class ShipTest extends TestCase
{
    
    public static function setPosizione()
    {
        return [
            [['a1','a2'],true],
            [['a1','a2','b2'],false]

        ];
    }
            
    /**
     * @dataProvider setPosizione
     */
    public function testImpostaPosizione($coordinate, $expected) {
        $ship = new Ship('Patrol Boat', 2);
        $result = $ship->impostaPosizione($coordinate);
        $this->assertEquals($result , $expected);
    }

    /**
     * @dataProvider setPosizione
     */
    public function testVerificaVicinanza($coordinate, $expected){
        $ship = new Ship('Patrol Boat', 2);
        $result = $ship->verificaVicinanza($coordinate);
        $this->assertEquals($result , $expected);
    }


    public static function setColpito()
    {
        return [
            [['a1', 'a2'], 'a1', 'colpito'],
            [['a3'], 'a3', 'affondata'],
            [['a1', 'a2', 'a3', 'a4', 'a5'], 'a6', 'acqua'],
        ];
    }

    /**
     * @dataProvider setColpito
     */
    public function testColpito($coordinate,$colpo, $expected)
    {
        $ship = new Ship('Patrol Boat', 2);
        $ship->impostaPosizione($coordinate);
        $result = $ship->colpito($colpo);
        $this->assertEquals($result, $expected);
    }
        
    public function testAffondata() {

        $ship = new Ship('Patrol Boat', 2);
        $ship->impostaPosizione(['a1', 'a2']);

        $ship->setAffondata();
        $result = $ship->colpito('a1');
        $this->assertEquals('già affondata', $result);
    }



}