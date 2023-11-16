<?php
namespace BattagliaNavale\Test;

use PHPUnit\Framework\TestCase;
use App\Controller\Ship;

class ShipTest extends TestCase
{
    /**
     * @dataProvider getDataInput
     */
    
    public function testColpito($tipo, $lunghezza, $coordinate,$colpo, $expected)
    {
        $ship = new Ship($tipo, $lunghezza, $coordinate);
        $result = $ship->colpito($colpo);
        $this->assertEquals($expected, $result);
    }



    public static function getDataInput()
    {
        return [
            ['Patrol Boat', 2, ['a1', 'a2'], 'a1', 'colpito'],
            ['Submarine', 3, ['a3'], 'a3', 'affondata'],
            ['Carrier', 5, ['a1', 'a2', 'a3', 'a4', 'a5'], 'a6', 'acqua']
        ];
    }
}