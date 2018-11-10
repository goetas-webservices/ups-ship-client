<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\UPSShipService\SoapContainer;
use GoetasWebservices\Client\UPSShipService\SoapStubs\ShipService;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client ShipService
 */
$client = $factory->getClient('SCHEMA-WSDLs/Ship.wsdl','ShipPort', 'ShipService');


$result = $client->ProcessShipment(/* put here your params */);

var_dump($result);
