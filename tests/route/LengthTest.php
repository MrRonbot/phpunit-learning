<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

final class LengthTest extends TestCase
{
    /**
     * @dataProvider lengthsProvider
     */
    public function testLengthHasValue(Length $length, $expected)
    {
        $this->assertEquals($expected, $length->asInteger());
    }

    public function lengthsProvider()
    {
        return [
            'length1' => [Length::one(),   1],
            'length2' => [Length::two(),   2],
            'length3' => [Length::three(), 3],
            'length4' => [Length::four(),  4],
            'length5' => [Length::five(),  5],
            'length6' => [Length::six(),   6],
        ];
    }
}
