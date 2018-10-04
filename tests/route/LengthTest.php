<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

final class LengthTest extends TestCase
{
    public function testCanBeOneUnit()
    {
        $this->assertEquals(1, Length::one()->asInteger());
    }

    public function testCanBeTwoUnits()
    {
        $this->assertEquals(2, Length::two()->asInteger());
    }
}
