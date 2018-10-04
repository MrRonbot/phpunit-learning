# PHPUnit Learning

Learning PHPUnit basics through implementing test cases for the _Ticket To Ride_ game example at the PHP Conference Asia 
2018 PHPUnit workshop

## Sample Testdox Output

```
PHPUnit 7.3.5 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.2.10
Configuration: /Users/ronlim/Workspace/phpunit-learning/phpunit.xml

TicketToRide\Card
 ✔ Card can have color data set "purple" [0.27 ms]
 ✔ Card can have color data set "white" [0.11 ms]
 ✔ Card can have color data set "blue" [0.11 ms]
 ✔ Card can have color data set "yellow" [0.11 ms]
 ✔ Card can have color data set "orange" [0.10 ms]
 ✔ Card can have color data set "black" [0.09 ms]
 ✔ Card can have color data set "red" [0.10 ms]
 ✔ Card can have color data set "green" [0.10 ms]
 ✔ Card can have color data set "wildcard" [0.10 ms]

TicketToRide\RouteClaimChecker
 ✔ Can claim route with correct card color and length data set "purple1_purple1_canClaim" [0.44 ms]
 ✔ Can claim route with correct card color and length data set "white1_white1_canClaim" [0.14 ms]
 ✔ Can claim route with correct card color and length data set "gray1_purple1_canClaim" [0.13 ms]
 ✔ Can claim route with correct card color and length data set "gray2_purple1_cannotClaim" [0.08 ms]
 ✔ Can claim route with correct card color and length data set "purple1_white1_cannotClaim" [0.09 ms]
 ✔ Can claim route with correct card color and length data set "purple2_purple1_cannotClaim" [0.07 ms]

TicketToRide\ScoreCalculator
 ✔ Route is worth points based on length data set "length1" [0.21 ms]
 ✔ Route is worth points based on length data set "length2" [0.08 ms]
 ✔ Route is worth points based on length data set "length3" [0.08 ms]
 ✔ Route is worth points based on length data set "length4" [0.08 ms]
 ✔ Route is worth points based on length data set "length5" [0.07 ms]
 ✔ Route is worth points based on length data set "length6" [0.09 ms]

TicketToRide\City
 ✔ Can have non empty name [0.07 ms]
 ✔ Cannot have empty name [0.21 ms]

TicketToRide\Length
 ✔ Length has value data set "length1" [0.06 ms]
 ✔ Length has value data set "length2" [0.06 ms]
 ✔ Length has value data set "length3" [0.06 ms]
 ✔ Length has value data set "length4" [0.04 ms]
 ✔ Length has value data set "length5" [0.04 ms]
 ✔ Length has value data set "length6" [0.04 ms]

TicketToRide\Route
 ✔ Can connect two different cities [0.06 ms]
 ✔ Cannot connect two same cities [0.06 ms]
 ✔ Can have color data set "purple" [0.05 ms]
 ✔ Can have color data set "white" [0.05 ms]
 ✔ Can have color data set "blue" [0.05 ms]
 ✔ Can have color data set "yellow" [0.05 ms]
 ✔ Can have color data set "orange" [0.05 ms]
 ✔ Can have color data set "black" [0.04 ms]
 ✔ Can have color data set "red" [0.05 ms]
 ✔ Can have color data set "green" [0.05 ms]
 ✔ Can have color data set "wildcard" [0.05 ms]
 ✔ Can have length data set "one" [0.05 ms]
 ✔ Can have length data set "two" [0.05 ms]
 ✔ Can have length data set "three" [0.05 ms]
 ✔ Can have length data set "four" [0.04 ms]
 ✔ Can have length data set "five" [0.05 ms]
 ✔ Can have length data set "six" [0.05 ms]

Time: 79 ms, Memory: 10.00MB

OK (46 tests, 46 assertions)
```
