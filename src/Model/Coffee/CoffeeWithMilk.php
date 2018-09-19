<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:16
 */

namespace App\Model\Coffee;


class CoffeeWithMilk implements CoffeeInterface
{

    private $coffee;
    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getPrice()
    {
        return $this->coffee->getPrice() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', with milk';
    }
}