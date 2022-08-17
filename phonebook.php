<?php

use Teste\Ster\PhoneBook\PhoneBook;

require 'vendor/autoload.php';

$phoneBook = new PhoneBook();

$generatedPhoneBook = $phoneBook->generatePhoneBook();

echo !$phoneBook->searchPhoneNumber("Marina") ? "Número não encontrado" : "Número encontrado";

