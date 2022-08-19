<?php

use Teste\Ster\Paint\PaintBucket;
use Teste\Ster\Paint\Painting;

require 'vendor/autoload.php';

function printer(array $characterMatrix): void
{
    foreach ($characterMatrix as $line) {
        echo implode('', $line) . PHP_EOL;
    }
}

$characterMatrix = [
    ['.', "#", "#", "#", ".", "."],
    [".", "#", ".", ".", "#", "."],
    [".", "#", "#", "#", ".", "."],
    [".", "#", ".", ".", ".", "."]
];

$bucket = new PaintBucket(new Painting(), $characterMatrix);
printer($bucket->paintCharacter([0, 1], "o"));

$bucket = new PaintBucket(new Painting(), $characterMatrix);
printer($bucket->paintCharacter([1, 3], "o"));

$bucket = new PaintBucket(new Painting(), $characterMatrix);
printer($bucket->paintCharacter([1, 3], "#"));