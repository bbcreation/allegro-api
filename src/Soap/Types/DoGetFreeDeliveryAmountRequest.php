<?php

namespace bbcreation\AllegroApi;

class DoGetFreeDeliveryAmountRequest
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $userId
     * @param int $countryId
     * @param string $webapiKey
     */
    public function __construct($userId = null, $countryId = null, $webapiKey = null)
    {
      $this->userId = $userId;
      $this->countryId = $countryId;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \bbcreation\AllegroApi\DoGetFreeDeliveryAmountRequest
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \bbcreation\AllegroApi\DoGetFreeDeliveryAmountRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \bbcreation\AllegroApi\DoGetFreeDeliveryAmountRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
