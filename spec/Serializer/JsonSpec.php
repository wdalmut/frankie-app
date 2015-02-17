<?php

namespace spec\Serializer;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class JsonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Serializer\Json');
    }

    function it_should_prepare_the_json(Request $request, Response $response, ResponseHeaderBag $bag)
    {
        $bag->set("Content-Type", "application/json")->shouldBeCalledTimes(1);
        $response->headers = $bag;

        $response->setContent("[]")->shouldBeCalled();

        $this->serialize($request, $response, [])->shouldReturn(null);
    }
}
