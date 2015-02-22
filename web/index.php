<?php
use DI\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Corley\Middleware\App;
use Acclimate\Container\CompositeContainer;
use Acclimate\Container\ContainerAcclimator;
use Corley\Middleware\Factory\AppFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder as DiCBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;


$loader = require_once __DIR__.'/../vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$container = new CompositeContainer();

$sfContainer = new DicBuilder();
$loader = new XmlFileLoader($sfContainer, new FileLocator(realpath(__DIR__  . '/../')));
$loader->load(realpath(__DIR__ . '/../configs/services.xml'));

$acclimate = new ContainerAcclimator;

$container = new CompositeContainer();
$container->addContainer($acclimate->acclimate($sfContainer));

$builder = new ContainerBuilder();
$builder->wrapContainer($container);

$phpdiContainer = $builder->build();
$container->addContainer($acclimate->acclimate($phpdiContainer));

$request = Request::createFromGlobals();
$response = new Response();

AppFactory::$DEBUG = false;
AppFactory::$CACHE_FOLDER = __DIR__ . "/../cache";
$app = AppFactory::createApp(__DIR__.'/../src', $container, $request, $response);
$response = $app->run($request, $response);
$response->send();
