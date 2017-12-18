<?php

/**
 * @package Nietzscheson\Common\VatCalculator
 *
 * (c) Cristian Angulo Nova <@nietzscheson>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Nietzscheson\Common\VatCalculator;

use Nietzscheson\Common\VatCalculator\AmountAndVatInterface;
use Nietzscheson\Common\VatCalculator\VatCalculatorInterface;
use Nietzscheson\Common\VatCalculator\VatCalculatorResultInterface;
use PhpSpec\ObjectBehavior;

class VatCalculatorSpec extends ObjectBehavior
{

    private $amount = 100;
    private $vat = 16;

    function let(AmountAndVatInterface $amountAndVat)
    {
        $amountAndVat->getAmount()->willReturn($this->amount);
        $amountAndVat->getVat()->willReturn($this->vat);
    }

    function it_is_implement_a_vat_calculator_interface()
    {
        $this->shouldHaveType(VatCalculatorInterface::class);
    }

    function it_should_return_a_vat_calculator_result_interface(AmountAndVatInterface $amountAndVat)
    {

        $this::takeOut($amountAndVat)->shouldBeAnInstanceOf(VatCalculatorResultInterface::class);
        $this::add($amountAndVat)->shouldBeAnInstanceOf(VatCalculatorResultInterface::class);

    }

    function it_should_return_a_vat_calculator_result_take_out(AmountAndVatInterface $amountAndVat)
    {

        $vatCalculator = $this->takeOut($amountAndVat);

        $subtotal = $this->amount / (($this->vat / 100) + 1);
        $percent = $this->amount - $subtotal;

        $vatCalculator->getSubtotal()->shouldReturn($subtotal);
        $vatCalculator->getVatPercent()->shouldReturn($percent);
        $vatCalculator->getTotal()->shouldReturn($subtotal + $percent);
    }

    function it_should_return_a_vat_calculator_result_add(AmountAndVatInterface $amountAndVat)
    {

        $vatCalculator = $this->add($amountAndVat);

        $subtotal = (float) $this->amount;
        $percent = $subtotal * ($this->vat / 100);

        $vatCalculator->getSubtotal()->shouldReturn($subtotal);
        $vatCalculator->getVatPercent()->shouldReturn($percent);
        $vatCalculator->getTotal()->shouldReturn($subtotal + $percent);
    }
}