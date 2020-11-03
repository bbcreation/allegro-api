<?php

namespace bbcreation\AllegroApi;

class DoCancelRefundWarningRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @param string $sessionId
     * @param int $refundId
     */
    public function __construct($sessionId = null, $refundId = null)
    {
      $this->sessionId = $sessionId;
      $this->refundId = $refundId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \bbcreation\AllegroApi\DoCancelRefundWarningRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
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
     * @return \bbcreation\AllegroApi\DoCancelRefundWarningRequest
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

}
