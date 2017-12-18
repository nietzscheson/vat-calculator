<?php

namespace Nietzscheson\Common\VatCalculator;

class VatCalculator implements VatCalculatorInterface
{

    /**
     * {@inheritdoc}
     */
    public static function takeOut(AmountAndVatInterface $amountAndVat): VatCalculatorResultInterface
    {
        $result = new VatCalculatorResult();

        $result->setSubtotal($amountAndVat->getAmount() / (self::percent($amountAndVat) + 1));
        $result->setVatPercent($amountAndVat->getAmount() - $result->getSubtotal());
        $result->setTotal($result->getSubtotal() + $result->getVatPercent());

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public static function add(AmountAndVatInterface $amountAndVat): VatCalculatorResultInterface
    {
        $result = new VatCalculatorResult();

        $result->setSubtotal($amountAndVat->getAmount());
        $result->setVatPercent($result->getSubtotal() * self::percent($amountAndVat));
        $result->setTotal($result->getSubtotal() + $result->getVatPercent());

        return $result;
    }


    private static function percent(VatInterface $vat)
    {
        return $vat->getVat() / 100;
    }

}