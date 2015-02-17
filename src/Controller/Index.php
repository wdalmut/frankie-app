<?php
namespace Controller;

use Corley\Middleware\Annotations\Route;
use Corley\Middleware\Annotations\After;

/**
 * @After(targetClass="Serializer\Json", targetMethod="serialize")
 */
class Index
{
    /**
     * @Route("/", methods={"GET"})
     */
    public function index()
    {
        return ["HelloWorld" => "World"];
    }
}
