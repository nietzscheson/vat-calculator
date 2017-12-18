<?php

namespace Nietzscheson\Common\VatCalculator;

interface VatCalculatorInterface
{

    /**
     * @param AmountAndVatInterface
     *
     * @return VatCalculatorResultInterface
     */
    public static function takeOut(AmountAndVatInterface $amountAndVat): VatCalculatorResultInterface;

    /**
     * * @param AmountAndVatInterface
     *
     * @return VatCalculatorResultInterface
     */
    public static function add(AmountAndVatInterface $amountAndVat): VatCalculatorResultInterface;
}