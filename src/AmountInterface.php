<?php

namespace Nietzscheson\Common\VatCalculator;

interface AmountInterface
{

    /**
     * @return float
     */
    public function getAmount(): float;

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void;
}