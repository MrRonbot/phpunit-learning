<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

/**
 * @covers \TicketToRide\Card
 *
 * @uses \TicketToRide\Color
 */
final class CardTest extends TestCase
{
    /**
     * @dataProvider colorsProvider
     */
    public function testCardCanHaveColor(Card $card, Color $expected)
    {
        $this->assertEquals($expected, $card->color());
    }

    public function colorsProvider()
    {
        return [
            'purple'   => [Card::purple(), Color::purple()],
            'white'    => [Card::white(), Color::white()],
            'blue'     => [Card::blue(), Color::blue()],
            'yellow'   => [Card::yellow(), Color::yellow()],
            'orange'   => [Card::orange(), Color::orange()],
            'black'    => [Card::black(), Color::black()],
            'red'      => [Card::red(), Color::red()],
            'green'    => [Card::green(), Color::green()],
            'wildcard' => [Card::locomotive(), Color::wildcard()],
        ];
    }
}
