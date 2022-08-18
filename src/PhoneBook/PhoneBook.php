<?php

namespace Teste\Ster\PhoneBook;

class PhoneBook
{
    private array $phoneBook;
    

    public function __construct(array $list)
    {
        $this->phoneBook = $list;
    }

    public function searchPhoneNumber(string $name): ?string
    {

        foreach ($this->phoneBook as $key => $value)
        {
            if ($value['name'] == $name)
            {
                return $value['phone'];
            }
        }

        return null;
    }

    public function generatePhoneBook()
    {
     
        for ($i = 1; $i <= 10; $i++) {
            $this->phoneBook[] = ['name' => substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"),1,10), 'number' => strval(rand(9,9))];
        }

        $this->phoneBook[] = ['name' => "Marina", 'number' => strval(rand())];

        array_multisort(array_column($this->phoneBook, 'name'), SORT_ASC, $this->phoneBook);

        return $this->phoneBook;
    }
}