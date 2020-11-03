<?php

namespace bbcreation\AllegroApi;

class doGetMyIncomingPaymentsResponse
{

    /**
     * @var ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    protected $payTransIncome = null;

    /**
     * @param ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    public function __construct($payTransIncome = null)
    {
      $this->payTransIncome = $payTransIncome;
    }

    /**
     * @return ArrayOfUserincomingpaymentstruct
     */
    public function getPayTransIncome()
    {
      return $this->payTransIncome;
    }

    /**
     * @param ArrayOfUserincomingpaymentstruct $payTransIncome
     * @return \bbcreation\AllegroApi\doGetMyIncomingPaymentsResponse
     */
    public function setPayTransIncome($payTransIncome)
    {
      $this->payTransIncome = $payTransIncome;
      return $this;
    }

}
