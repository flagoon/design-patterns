<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:11
 */

namespace App\Model\Coffee;


class PlainCoffee implements CoffeeInterface
{

    private $price = 10;
    private $description = 'Plain coffee';
    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }
}