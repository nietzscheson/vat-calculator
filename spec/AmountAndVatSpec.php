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

use Nietzscheson\Common\VatCalculator\AmountAndVatInterface;
use PhpSpec\ObjectBehavior;

class AmountAndVatSpec extends ObjectBehavior
{

    function it_is_implement_a_amount_vat_interface()
    {
        $this->shouldHaveType(AmountAndVatInterface::class);
    }

    public function it_should_return_a_float_amount_value()
    {
        $amount = (float) 100.00;

        $this->setAmount($amount);

        $this->getAmount()->shouldReturn($amount);
    }

    public function it_should_return_a_integer_vat_value()
    {
        $vat = (int) 16;

        $this->setVat($vat);
        $this->getVat()->shouldReturn($vat);
    }
}