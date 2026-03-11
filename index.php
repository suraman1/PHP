<?php
echo "##########################\n";
echo "      Number guessing   \n";
echo "##########################\n";
echo "Guess from (1-100):
\n";
$toContinue = "y";

do{
    $number = rand(1, 100);
    $count = 0;
    $total = 10;
    while ($count < $total) {
        if($count == 7) {
            echo "you have { $total - $count} guesses left.\n";
        }
        $guess = readline("Enter your guess {$count}: ");
         $diff = $guess - $number;

if ($guess == $number) {
    echo "Congratulations!\n";
    echo "The number was {$number}!\n";
    break;

} elseif ($diff > 10) {
    echo "Too high\n";

} elseif ($diff > 0 && $diff <= 10) {
    echo "Little high\n";

} elseif ($diff < -10) {
    echo "Too low\n";

} elseif ($diff < 0 && $diff >= -10) {
    echo "Little low\n";
}
         $count++;
    }
    $toContinue = readline("Do you want to continue playing(y/n): ");
} while($toContinue == "y");


