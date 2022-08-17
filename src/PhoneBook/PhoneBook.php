<?php

namespace Teste\Ster\PhoneBook;

class PhoneBook
{
    private array $phoneBook;
    

    public function __construct()
    {
        $this->phoneBook = [];
    }

    public function searchPhoneNumber(string $name)
    {
        return true;
    }

    public function generatePhoneBook()
    {
     
        for ($i = 1; $i <= 1000; $i++) {
            $phoneBook[] = [substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,10), strval(rand())];
        }

        $phoneBook[] => ["Marina",strval(rand())];

        return $phoneBook;
    }
}