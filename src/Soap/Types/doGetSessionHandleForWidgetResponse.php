<?php

namespace bbcreation\AllegroApi;

class doGetSessionHandleForWidgetResponse
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param string $sessionHandle
     * @param int $serverTime
     */
    public function __construct($sessionHandle = null, $serverTime = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->serverTime = $serverTime;
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
     * @return \bbcreation\AllegroApi\doGetSessionHandleForWidgetResponse
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getServerTime()
    {
      return $this->serverTime;
    }

    /**
     * @param int $serverTime
     * @return \bbcreation\AllegroApi\doGetSessionHandleForWidgetResponse
     */
    public function setServerTime($serverTime)
    {
      $this->serverTime = $serverTime;
      return $this;
    }

}
