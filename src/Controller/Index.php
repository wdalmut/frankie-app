<?php
namespace Controller;

use Corley\Middleware\Annotations\Route;
use Corley\Middleware\Annotations\After;
use Entity\Test;

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
        $e = new Test();
        $e->setId(139857);
        $e->setName("This is the name");
        $e->setMarkAsRead(true);

        return $e;
    }
}
