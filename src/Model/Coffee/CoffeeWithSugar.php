<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:27
 */

namespace App\Model\Coffee;


class CoffeeWithSugar implements CoffeeInterface
{

    public $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getPrice()
    {
        return $this->coffee->getPrice() + 1;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', with sugar.';
    }
}