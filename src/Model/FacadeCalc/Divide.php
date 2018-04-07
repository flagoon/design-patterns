<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 07.04.18
 * Time: 22:30
 */
declare(strict_types=1);
namespace App\Model\FacadeCalc;

class Divide extends AbstractMathExpression
{
    public function division()
    {
        if ($this->secondNumber === 0) {
            return "Never divide by zero!";
        }
        return $this->firstNumber / $this->secondNumber;
    }
}
