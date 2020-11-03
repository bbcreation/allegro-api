<?php

namespace bbcreation\AllegroApi;

class doMyBillingResponse
{

    /**
     * @var string $myBilling
     */
    protected $myBilling = null;

    /**
     * @param string $myBilling
     */
    public function __construct($myBilling = null)
    {
      $this->myBilling = $myBilling;
    }

    /**
     * @return string
     */
    public function getMyBilling()
    {
      return $this->myBilling;
    }

    /**
     * @param string $myBilling
     * @return \bbcreation\AllegroApi\doMyBillingResponse
     */
    public function setMyBilling($myBilling)
    {
      $this->myBilling = $myBilling;
      return $this;
    }

}
