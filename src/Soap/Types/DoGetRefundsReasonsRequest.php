<?php

namespace bbcreation\AllegroApi;

class DoGetRefundsReasonsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @param string $sessionId
     * @param int $dealId
     */
    public function __construct($sessionId = null, $dealId = null)
    {
      $this->sessionId = $sessionId;
      $this->dealId = $dealId;
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
     * @return \bbcreation\AllegroApi\DoGetRefundsReasonsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
      return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return \bbcreation\AllegroApi\DoGetRefundsReasonsRequest
     */
    public function setDealId($dealId)
    {
      $this->dealId = $dealId;
      return $this;
    }

}
