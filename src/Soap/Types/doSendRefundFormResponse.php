<?php

namespace bbcreation\AllegroApi;

class doSendRefundFormResponse
{

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @param int $refundId
     */
    public function __construct($refundId = null)
    {
      $this->refundId = $refundId;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
      return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return \bbcreation\AllegroApi\doSendRefundFormResponse
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

}
