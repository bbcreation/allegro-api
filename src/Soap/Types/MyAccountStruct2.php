<?php

namespace bbcreation\AllegroApi;

class MyAccountStruct2
{

    /**
     * @var ArrayOfString $myAccountArray
     */
    protected $myAccountArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getMyAccountArray()
    {
      return $this->myAccountArray;
    }

    /**
     * @param ArrayOfString $myAccountArray
     * @return \bbcreation\AllegroApi\MyAccountStruct2
     */
    public function setMyAccountArray($myAccountArray)
    {
      $this->myAccountArray = $myAccountArray;
      return $this;
    }

}
