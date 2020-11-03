<?php

namespace bbcreation\AllegroApi;

class doGetUserIDResponse
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @param int $userId
     */
    public function __construct($userId = null)
    {
      $this->userId = $userId;
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
     * @return \bbcreation\AllegroApi\doGetUserIDResponse
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
