<?php declare(strict_types=1);
namespace TicketToRide;

use PHPUnit\Framework\TestCase;

final class RouteClaimCheckerTest extends TestCase
{
    /** @var $checker RouteClaimChecker */
    protected $checker;

    protected function setUp()
    {
        $this->checker = new RouteClaimChecker();
    }

    /**
     * @dataProvider routeClaimabilityProvider
     */
    public function testCanClaimRouteWithCorrectCardColorAndLength($routeColor, $routeLength, $cards, $expected)
    {
        $route = new Route(
            new City('Kansas'),
            new City('Oz'),
            $routeColor,
            $routeLength
        );

        $this->assertSame($expected, $this->checker->canClaimRoute($route, $cards));
    }

    public function routeClaimabilityProvider()
    {
        return [
            'purple1_purple1_canClaim' => [
                Color::purple(),
                Length::one(),
                CardCollection::fromCards(Card::purple()),
                true
            ],
            'white1_white1_canClaim' => [
                Color::white(),
                Length::one(),
                CardCollection::fromCards(Card::white()),
                true
            ],
            'gray1_purple1_canClaim' => [
                Color::wildcard(),
                Length::one(),
                CardCollection::fromCards(Card::purple()),
                true
            ],
            'gray2_purple1_cannotClaim' => [
                Color::wildcard(),
                Length::two(),
                CardCollection::fromCards(Card::purple()),
                false
            ],
            'purple1_white1_cannotClaim' => [
                Color::purple(),
                Length::one(),
                CardCollection::fromCards(Card::white()),
                false
            ],
            'purple2_purple1_cannotClaim' => [
                Color::purple(),
                Length::two(),
                CardCollection::fromCards(Card::purple()),
                false
            ],
        ];
    }
}
