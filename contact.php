<?php

class Contact
{
    public $name;
    public $surname;
    public $number;

    public function asArray()
    {
        return ['name' => $this->name,
            'surname' => $this->surname,
            'number' => $this->number];
    }

}

?>