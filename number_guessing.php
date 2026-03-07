<?php
echo "##########################\n";
echo "      Number guessing   \n";
echo "##########################\n";
echo "Guess from (1-100):
\n";
$toContinue = "y";

do {
    $number = rand(1, 100);
    $count = 0;
    $total = 10;
    while ($count < $total) {
        if ($count == 7) {
            echo "you have { $total - $count} guesses left.\n";
        }
        $guess = readline("Enter your guess {$count}: ");
        $range = $guess - $number;
        if ($guess == $number) {
            echo "Congratulation!\n";
            echo "The number was {$number}!\n";
            break;
        } elseif ($range > 10) {
            echo "Too high \n";
        } elseif ($range < -10) {
            echo "Too low \n";
        } else {
            echo "Close \n";
        }
        $count++;
    }
    $toContinue = readline("Do you want to continue playing(y/n): ");
} while ($toContinue == "y");
