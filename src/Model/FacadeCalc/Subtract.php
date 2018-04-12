<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:31
 */
declare(strict_types=1);
namespace App\Model\FacadeCalc;


class Subtract extends AbstractMathExpression
{
    public function subtraction(): int
    {
        return ($this->firstNumber - $this->secondNumber);
    }
}