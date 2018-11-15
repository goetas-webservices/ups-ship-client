<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\UPSShipService\SoapContainer;
use GoetasWebservices\Client\UPSShipService\SoapStubs\ShipService;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();

// use this when cloning this repository and keeping the directory, comment it when including goetas-webservices/ups-ship-client via composer
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();

// uncomment this when including goetas-webservices/ups-ship-client via composer
// $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container, null, __DIR__ . '/vendor/goetas-webservices/ups-ship-client')->build();

$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client ShipService
 */
$client = $factory->getClient('SCHEMA-WSDLs/Ship.wsdl','ShipPort', 'ShipService');


$result = $client->ProcessShipment(/* put here your params */);

var_dump($result);
