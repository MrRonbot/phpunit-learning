<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

final class CityTest extends TestCase
{
    public function testCanHaveNonEmptyName()
    {
        $name = 'Oz';
        $city = new City($name);

        $this->assertTrue($city->name() == $name);
    }

    public function testCannotHaveEmptyName()
    {
        $this->expectException(InvalidArgumentException::class);

        $city = new City('');
    }
}
