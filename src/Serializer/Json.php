<?php
namespace Serializer;

use DI\Annotation\Injectable;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use JMS\Serializer\Annotation as J;
use JMS\Serializer\Construction\DoctrineObjectConstructor;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;

class Json
{
    public function serialize($request, $response, $data)
    {
        $response->headers->set("Content-Type", "application/json");
        $response->setContent(json_encode($data));
    }
}

