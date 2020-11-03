<?php

namespace bbcreation\AllegroApi;

class doSetFreeDeliveryAmountResponse
{

    /**
     * @var boolean $responseStatus
     */
    protected $responseStatus = null;

    /**
     * @param boolean $responseStatus
     */
    public function __construct($responseStatus = null)
    {
      $this->responseStatus = $responseStatus;
    }

    /**
     * @return boolean
     */
    public function getResponseStatus()
    {
      return $this->responseStatus;
    }

    /**
     * @param boolean $responseStatus
     * @return \bbcreation\AllegroApi\doSetFreeDeliveryAmountResponse
     */
    public function setResponseStatus($responseStatus)
    {
      $this->responseStatus = $responseStatus;
      return $this;
    }

}
