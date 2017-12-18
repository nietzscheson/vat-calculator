<?php

namespace Nietzscheson\Common\VatCalculator;

interface VatInterface
{

    /**
     * @return int
     */
    public function getVat(): int;

    /**
     * @param int $vat
     */
    public function setVat(int $vat): void;


}