<?php

/**
 * @package spec\Nietzscheson\Common\VatCalculator
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Common\VatCalculator;

use Nietzscheson\Common\VatCalculator\VatCalculatorResultInterface;
use PhpSpec\ObjectBehavior;

class VatCalculatorResultSpec extends ObjectBehavior
{

    function it_is_implement_a_vat_calculator_result_interface()
    {
        $this->shouldHaveType(VatCalculatorResultInterface::class);
    }

    function it_should_return_a_interger_vat_value()
    {
        $vat = (int) 16;

        $this->setVat($vat);
        $this->getVat()->shouldReturn($vat);
    }

    function it_should_return_a_float_percent_vat_value()
    {
        $percent = (float) rand(1, 99);

        $this->setVatPercent($percent);
        $this->getVatPercent()->shouldReturn($percent);
    }

    function it_should_return_a_float_subtotal_value()
    {
        $sutotal = (float) 100;

        $this->setSubtotal($sutotal);
        $this->getSubtotal()->shouldReturn($sutotal);
    }

    function it_should_return_a_total_value()
    {

        $total = (float) 100;

        $this->setTotal($total);
        $this->getTotal()->shouldReturn($total);
    }
}