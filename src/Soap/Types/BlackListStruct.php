<?php

namespace bbcreation\AllegroApi;

class BlackListStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var int $userRating
     */
    protected $userRating = null;

    /**
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @param int $userId
     * @param string $userLogin
     * @param int $userRating
     * @param int $userCountry
     */
    public function __construct($userId = null, $userLogin = null, $userRating = null, $userCountry = null)
    {
      $this->userId = $userId;
      $this->userLogin = $userLogin;
      $this->userRating = $userRating;
      $this->userCountry = $userCountry;
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
     * @return \bbcreation\AllegroApi\BlackListStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
      return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return \bbcreation\AllegroApi\BlackListStruct
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserRating()
    {
      return $this->userRating;
    }

    /**
     * @param int $userRating
     * @return \bbcreation\AllegroApi\BlackListStruct
     */
    public function setUserRating($userRating)
    {
      $this->userRating = $userRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCountry()
    {
      return $this->userCountry;
    }

    /**
     * @param int $userCountry
     * @return \bbcreation\AllegroApi\BlackListStruct
     */
    public function setUserCountry($userCountry)
    {
      $this->userCountry = $userCountry;
      return $this;
    }

}
