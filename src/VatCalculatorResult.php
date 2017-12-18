<?php

namespace Nietzscheson\Common\VatCalculator;

class VatCalculatorResult implements VatCalculatorResultInterface
{

    use VatTrait;

    /**
     * @var float
     */
    private $vatPercent;

    /**
     * @var float
     */
    private $subtotal;

    /**
     * @var float
     */
    private $total;

    /**
     * {@inheritdoc}
     */
    public function getVatPercent(): float
    {
        return $this->vatPercent;
    }

    /**
     * {@inheritdoc}
     */
    public function setVatPercent(float $vatPercent): void
    {
        $this->vatPercent = $vatPercent;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubtotal(float $subtotal): void
    {
        $this->subtotal = $subtotal;
    }

    /**
     * {@inheritdoc}
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * {@inheritdoc}
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }
}