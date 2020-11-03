<?php

namespace bbcreation\AllegroApi;

class DoMyBillingRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @param string $sessionHandle
     */
    public function __construct($sessionHandle = null)
    {
      $this->sessionHandle = $sessionHandle;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \bbcreation\AllegroApi\DoMyBillingRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

}
