<?php

namespace bbcreation\AllegroApi;

class doRequestSurchargeResponse
{

    /**
     * @var int $surchargeResult
     */
    protected $surchargeResult = null;

    /**
     * @param int $surchargeResult
     */
    public function __construct($surchargeResult = null)
    {
      $this->surchargeResult = $surchargeResult;
    }

    /**
     * @return int
     */
    public function getSurchargeResult()
    {
      return $this->surchargeResult;
    }

    /**
     * @param int $surchargeResult
     * @return \bbcreation\AllegroApi\doRequestSurchargeResponse
     */
    public function setSurchargeResult($surchargeResult)
    {
      $this->surchargeResult = $surchargeResult;
      return $this;
    }

}
