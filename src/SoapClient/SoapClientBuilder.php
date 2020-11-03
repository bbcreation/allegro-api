<?php

namespace bbcreation\AllegroApi\SoapClient;

use bbcreation\AllegroApi\SoapClient;

/**
 * Class SoapClientBuilder.
 *
 * @package bbcreation\AllegroApi\SoapClient
 */
class SoapClientBuilder
{
    /**
     * @var SoapClient
     */
    public $soapClient;

    /**
     * @var string
     */
    protected $wsdl;

    /**
     * SoapClientBuilder constructor.
     *
     * @param bool $sandbox
     * @param array $options
     */
    public function __construct($sandbox = false, array $options = [])
    {
        if ($sandbox) {
            $this->wsdl = 'https://webapi.allegro.pl.allegrosandbox.pl/service.php?wsdl';
        }

        $this->soapClient = new SoapClient($this->wsdl, $options);
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }
}
