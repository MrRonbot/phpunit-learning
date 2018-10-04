<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

final class RouteTest extends TestCase
{
    public function testCanConnectTwoDifferentCities()
    {
        $route = new Route(
            new City('Kansas'),
            new City('Oz'),
            Color::purple(),
            Length::one()
        );

        $this->assertTrue($route->firstCity()->name() !== $route->secondCity()->name());
    }

    public function testCannotConnectTwoSameCities()
    {
        $this->expectException(InvalidArgumentException::class);

        $route = new Route(
            new City('Oz'),
            new City('Oz'),
            Color::purple(),
            Length::one()
        );
    }

    /**
     * @dataProvider routeColorProvider
     */
    public function testCanHaveColor(Color $color)
    {
        $route = new Route(
            new City('Kansas'),
            new City('Oz'),
            $color,
            Length::one()
        );

        $this->assertTrue($route->color()->equalTo($color));
    }

    /**
     * @dataProvider routeLengthProvider
     */
    public function testCanHaveLength(Length $length, int $expected)
    {
        $route = new Route(
            new City('Kansas'),
            new City('Oz'),
            Color::purple(),
            $length
        );

        $this->assertEquals($expected, $route->length()->asInteger());
    }

    public function routeColorProvider()
    {
        return [
            'purple' => [Color::purple()],
            'white' => [Color::white()],
            'blue' => [Color::blue()],
            'yellow' => [Color::yellow()],
            'orange' => [Color::orange()],
            'black' => [Color::black()],
            'red' => [Color::red()],
            'green' => [Color::green()],
            'wildcard' => [Color::wildcard()],
        ];
    }

    public function routeLengthProvider()
    {
        return [
            'one' => [Length::one(), 1],
            'two' => [Length::two(), 2],
            'three' => [Length::three(), 3],
            'four' => [Length::four(), 4],
            'five' => [Length::five(), 5],
            'six' => [Length::six(), 6],
        ];
    }
}
