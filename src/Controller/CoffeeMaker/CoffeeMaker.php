<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.04.18
 * Time: 20:09
 */

namespace App\Controller\CoffeeMaker;

use App\Model\Coffee\CoffeeInterface;
use App\Model\Coffee\CoffeeWithMilk;
use App\Model\Coffee\CoffeeWithSugar;
use App\Model\Coffee\PlainCoffee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoffeeMaker extends Controller
{
    private $coffeeOrder = [];

    public function index()
    {
        $coffee = new PlainCoffee();
        $coffee = new CoffeeWithMilk($coffee);
        $coffee = new CoffeeWithSugar($coffee);
        $coffeeOrder = $this->coffeeOrder($coffee);
        return $this->json($coffeeOrder);
    }

    public function coffeeOrder(CoffeeInterface $coffee) {
        $this->coffeeOrder['description'] = $coffee->getDescription();
        $this->coffeeOrder['price'] = $coffee->getPrice();
        return $this->coffeeOrder;
    }
}
