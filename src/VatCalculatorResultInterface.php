<?php

namespace Nietzscheson\Common\VatCalculator;

interface VatCalculatorResultInterface extends VatInterface
{

    /**
     * @return float
     */
    public function getVatPercent(): float;

    /**
     * @param float
     */
    public function setVatPercent(float $percent): void;

    /**
     * @return float
     */
    public function getSubtotal(): float;

    /**
     * @param float
     */
    public function setSubtotal(float $subtotal): void;

    /**
     * @return float
     */
    public function getTotal(): float;

    /**
     * @param float
     */
    public function setTotal(float $total): void;

}