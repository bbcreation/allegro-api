<?php

namespace bbcreation\AllegroApi;

class DoSendPostBuyFormRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     */
    protected $newPostBuyFormSeller = null;

    /**
     * @var NewPostBuyFormCommonStruct $newPostBuyFormCommon
     */
    protected $newPostBuyFormCommon = null;

    /**
     * @param string $sessionId
     * @param ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     * @param NewPostBuyFormCommonStruct $newPostBuyFormCommon
     */
    public function __construct($sessionId = null, $newPostBuyFormSeller = null, $newPostBuyFormCommon = null)
    {
      $this->sessionId = $sessionId;
      $this->newPostBuyFormSeller = $newPostBuyFormSeller;
      $this->newPostBuyFormCommon = $newPostBuyFormCommon;
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
     * @return \bbcreation\AllegroApi\DoSendPostBuyFormRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfNewpostbuyformsellerstruct
     */
    public function getNewPostBuyFormSeller()
    {
      return $this->newPostBuyFormSeller;
    }

    /**
     * @param ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     * @return \bbcreation\AllegroApi\DoSendPostBuyFormRequest
     */
    public function setNewPostBuyFormSeller($newPostBuyFormSeller)
    {
      $this->newPostBuyFormSeller = $newPostBuyFormSeller;
      return $this;
    }

    /**
     * @return NewPostBuyFormCommonStruct
     */
    public function getNewPostBuyFormCommon()
    {
      return $this->newPostBuyFormCommon;
    }

    /**
     * @param NewPostBuyFormCommonStruct $newPostBuyFormCommon
     * @return \bbcreation\AllegroApi\DoSendPostBuyFormRequest
     */
    public function setNewPostBuyFormCommon($newPostBuyFormCommon)
    {
      $this->newPostBuyFormCommon = $newPostBuyFormCommon;
      return $this;
    }

}
