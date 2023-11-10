<?php
declare(strict_types=1);

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Filter;

class FilterTest extends TestCase
{
    /**
    * @dataProvider getDataInput
    */

    public function testEmailProvider($email)
    {
        $filter = new Filter();
        $this->assertTrue($filter->isEmail($email));
    }
    public function getDataInput() {
        return [
            ['foo@bar.com'],
            ['foo']
        ];
    }
}
 