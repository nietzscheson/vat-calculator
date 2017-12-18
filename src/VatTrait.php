<?php

namespace Nietzscheson\Common\VatCalculator;

trait VatTrait
{

    /**
     * @var int
     */
    private $vat;

    /**
     * @return int
     */
    public function getVat(): int
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat(int $vat): void
    {
        $this->vat = $vat;
    }
}