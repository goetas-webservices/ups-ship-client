<?php

namespace GoetasWebservices\Client\UPSShipService;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'goetas_webservices.soap_client.metadata_reader' => 'getGoetasWebservices_SoapClient_MetadataReaderService',
        );
        $this->privates = array(
            'goetas_webservices.soap_client.metadata_reader' => true,
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap_client.metadata.generator' => true,
            'goetas_webservices.soap_client.metadata_loader.array' => true,
            'goetas_webservices.soap_client.metadata_loader.dev' => true,
            'goetas_webservices.soap_client.metadata_reader' => true,
            'goetas_webservices.soap_client.stub.class_writer' => true,
            'goetas_webservices.soap_client.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the private 'goetas_webservices.soap_client.metadata_reader' shared service.
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_SoapClient_MetadataReaderService()
    {
        return $this->services['goetas_webservices.soap_client.metadata_reader'] = new \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap_client.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'goetas_webservices.soap_client.metadata' => array(
                'SCHEMA-WSDLs/Ship.wsdl' => array(
                    'ShipService' => array(
                        'ShipPort' => array(
                            'operations' => array(
                                'ProcessShipment' => array(
                                    'action' => 'http://onlinetools.ups.com/webservices/ShipBinding/v1.0',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ProcessShipment',
                                    'method' => 'processShipment',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Messages\\ProcessShipmentInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Headers\\ProcessShipmentInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapParts\\ProcessShipmentInput',
                                        'parts' => array(
                                            'body' => 'ShipmentRequest',
                                            'uPSSecurity' => 'UPSSecurity',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Messages\\ProcessShipmentOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Headers\\ProcessShipmentOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapParts\\ProcessShipmentOutput',
                                        'parts' => array(
                                            'body' => 'ShipmentResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'ProcessShipConfirm' => array(
                                    'action' => 'http://onlinetools.ups.com/webservices/ShipBinding/v1.0',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ProcessShipConfirm',
                                    'method' => 'processShipConfirm',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Messages\\ProcessShipConfirmInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Headers\\ProcessShipConfirmInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapParts\\ProcessShipConfirmInput',
                                        'parts' => array(
                                            'body' => 'ShipConfirmRequest',
                                            'uPSSecurity' => 'UPSSecurity',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Messages\\ProcessShipConfirmOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Headers\\ProcessShipConfirmOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapParts\\ProcessShipConfirmOutput',
                                        'parts' => array(
                                            'body' => 'ShipConfirmResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'ProcessShipAccept' => array(
                                    'action' => 'http://onlinetools.ups.com/webservices/ShipBinding/v1.0',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ProcessShipAccept',
                                    'method' => 'processShipAccept',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Messages\\ProcessShipAcceptInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Headers\\ProcessShipAcceptInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapParts\\ProcessShipAcceptInput',
                                        'parts' => array(
                                            'body' => 'ShipAcceptRequest',
                                            'uPSSecurity' => 'UPSSecurity',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Messages\\ProcessShipAcceptOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapEnvelope\\Headers\\ProcessShipAcceptOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service\\SoapParts\\ProcessShipAcceptOutput',
                                        'parts' => array(
                                            'body' => 'ShipAcceptResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://wwwcie.ups.com/webservices/Ship',
                        ),
                    ),
                ),
            ),
            'goetas_webservices.soap_client.config' => array(
                'namespaces' => array(
                    'http://www.ups.com/WSDL/XOLTWS/Ship/v1.0' => 'GoetasWebservices\\Client\\UPS\\Ship\\Service',
                    'http://www.ups.com/XMLSchema/XOLTWS/Ship/v1.0' => 'GoetasWebservices\\Client\\UPS\\Ship\\Data',
                    'http://www.ups.com/XMLSchema/XOLTWS/Common/v1.0' => 'GoetasWebservices\\Client\\UPS\\Common',
                    'http://www.ups.com/XMLSchema/XOLTWS/IF/v1.0' => 'GoetasWebservices\\Client\\UPS\\Ifs',
                    'http://www.ups.com/XMLSchema/XOLTWS/UPSS/v1.0' => 'GoetasWebservices\\Client\\UPS\\Upss',
                    'http://www.ups.com/XMLSchema/XOLTWS/Error/v1.1' => 'GoetasWebservices\\Client\\UPS\\Error',
                ),
                'destinations_php' => array(
                    'GoetasWebservices\\Client\\UPS' => 'src',
                ),
                'destinations_jms' => array(
                    'GoetasWebservices\\Client\\UPS' => 'metadata',
                ),
                'metadata' => array(
                    'SCHEMA-WSDLs/Ship.wsdl' => NULL,
                ),
                'alternative_endpoints' => array(

                ),
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => array(

                ),
                'aliases' => array(

                ),
                'headers' => '\\SoapEnvelope\\Headers',
                'parts' => '\\SoapEnvelope\\Parts',
                'messages' => '\\SoapEnvelope\\Messages',
            ),
            'goetas_webservices.soap_client.unwrap_returns' => false,
        );
    }
}
