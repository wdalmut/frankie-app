<?php

namespace spec\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IndexSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Controller\Index');
    }

    function it_should_say_hello()
    {
        $this->index()->shouldBe(["HelloWorld" => "World"]);
    }
}
