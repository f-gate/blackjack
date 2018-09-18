<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 18/09/2018
 * Time: 11:28
 */


$suits = array (
    'clubs'=> 'clubs',
    'spades' => 'spades',
    'diamond' => 'diamond',
    'hearts' => 'hearts'
    );

$cards = array (
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10,
    'jack' => 10,
    'queen' => 10,
    'king' => 10,
    'ace' => 11
    );

/*
 * this picks 2 cards randomly preventing the same card being picked twice
 *
 * @param string $cards picks from $cards array
 * @param string $suits picks from $suits array
 *
 * ???
 */
function cardpicker($cards, $suits)
{
    $suit1 = array_rand($suits, 1);
    $card1 = array_rand($cards, 1);
    $card1_value = $cards[$card1];
    $card1_string = $card1 . $suit1;


    $suit2 = array_rand($suits, 1);
    $card2 = array_rand($cards, 1);
    $card2_value = $cards[$card2];
    $card2_string = $card2 . $suit2;


    while ($card1_string == $card2_string) {
        $suit2 = array_rand($suits, 1);
        $card2 = array_rand($cards, 1);
        $card2_value = $cards[$card2];
        $card2_string = $card2 . $suit2;

    }
    return $card1_value + $card2_value ;
}

$dealer_value = cardpicker($cards, $suits);
$player_value = cardpicker($cards, $suits);
echo "<br>";

echo 'player: ' . $player_value . "<br>" . 'dealer: ' . $dealer_value . "<br>";



if ($player_value > $dealer_value){
    echo 'player wins!' ;
}

if ($player_value < $dealer_value){
    echo 'dealer wins!';
}

if ($player_value == $dealer_value){
    echo 'draw!';
}















