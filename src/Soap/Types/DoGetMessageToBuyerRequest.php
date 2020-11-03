<?php

namespace bbcreation\AllegroApi;

class DoGetMessageToBuyerRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @param string $sessionId
     * @param int $itemId
     */
    public function __construct($sessionId = null, $itemId = null)
    {
      $this->sessionId = $sessionId;
      $this->itemId = $itemId;
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
     * @return \bbcreation\AllegroApi\DoGetMessageToBuyerRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \bbcreation\AllegroApi\DoGetMessageToBuyerRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

}
