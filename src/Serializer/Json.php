<?php
namespace Serializer;

use JMS\Serializer\Serializer;

class Json
{
    /**
     * @Inject
     * @var Serializer
     */
    private $serializer;

    public function serialize($request, $response, $data)
    {
        $response->headers->set("Content-Type", "application/json");
        $response->setContent($this->serializer->serialize($data, "json"));
    }
}

