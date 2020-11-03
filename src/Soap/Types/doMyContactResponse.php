<?php

namespace bbcreation\AllegroApi;

class doMyContactResponse
{

    /**
     * @var ArrayOfMycontactlist $mycontactList
     */
    protected $mycontactList = null;

    /**
     * @param ArrayOfMycontactlist $mycontactList
     */
    public function __construct($mycontactList = null)
    {
      $this->mycontactList = $mycontactList;
    }

    /**
     * @return ArrayOfMycontactlist
     */
    public function getMycontactList()
    {
      return $this->mycontactList;
    }

    /**
     * @param ArrayOfMycontactlist $mycontactList
     * @return \bbcreation\AllegroApi\doMyContactResponse
     */
    public function setMycontactList($mycontactList)
    {
      $this->mycontactList = $mycontactList;
      return $this;
    }

}
