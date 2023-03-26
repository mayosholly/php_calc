<?php

class Calculator
{
    public $operator;
    public $number_1;
    public $number_2;

    public function __construct(string $first, int $second, int $third)
    {
        $this->operator = $first;
        $this->number_1 = $second;
        $this->number_2 = $third;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->number_1 + $this->number_2;
                return $result;
                break;
            case 'substract':
                $result = $this->number_1 - $this->number_2;
                return $result;
                break;
            case 'multiply':
                $result = $this->number_1 * $this->number_2;
                return $result;
                break;
            case 'divide':
                $result = $this->number_1 / $this->number_2;
                return $result;
                break;
            default:
                return "An error occured";
                break;
        }
    }
}
