<?php

namespace bbcreation\AllegroApi;

class doAddToBlackListResponse
{

    /**
     * @var ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    protected $userBlackListResultsArr = null;

    /**
     * @param ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    public function __construct($userBlackListResultsArr = null)
    {
      $this->userBlackListResultsArr = $userBlackListResultsArr;
    }

    /**
     * @return ArrayOfUserblacklistaddresultstruct
     */
    public function getUserBlackListResultsArr()
    {
      return $this->userBlackListResultsArr;
    }

    /**
     * @param ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     * @return \bbcreation\AllegroApi\doAddToBlackListResponse
     */
    public function setUserBlackListResultsArr($userBlackListResultsArr)
    {
      $this->userBlackListResultsArr = $userBlackListResultsArr;
      return $this;
    }

}
