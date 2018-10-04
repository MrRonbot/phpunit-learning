<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

class ScoreCalculatorTest extends TestCase
{
    /** @var $calculator ScoreCalculator */
    protected $calculator;

    public function setUp()
    {
        $this->calculator = new ScoreCalculator();
    }

    /**
     * @dataProvider routeScoresProvider
     */
    public function testRouteIsWorthPointsBasedOnLength($length, $expected)
    {
        $route = new Route(
            new City('Kansas'),
            new City('Oz'),
            Color::purple(),
            $length
        );

        $this->assertSame($expected, $this->calculator->scoreRoute($route));
    }

    public function routeScoresProvider()
    {
        return [
            'length1' => [Length::one(),   1],
            'length2' => [Length::two(),   2],
            'length3' => [Length::three(), 4],
            'length4' => [Length::four(),  7],
            'length5' => [Length::five(),  10],
            'length6' => [Length::six(),   15],
        ];
    }
}
