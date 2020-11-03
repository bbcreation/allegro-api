<?php

namespace bbcreation\AllegroApi;

class doGetPaymentMethodsResponse
{

    /**
     * @var ArrayOfPaymentmethodstruct $paymentMethods
     */
    protected $paymentMethods = null;

    /**
     * @param ArrayOfPaymentmethodstruct $paymentMethods
     */
    public function __construct($paymentMethods = null)
    {
      $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return ArrayOfPaymentmethodstruct
     */
    public function getPaymentMethods()
    {
      return $this->paymentMethods;
    }

    /**
     * @param ArrayOfPaymentmethodstruct $paymentMethods
     * @return \bbcreation\AllegroApi\doGetPaymentMethodsResponse
     */
    public function setPaymentMethods($paymentMethods)
    {
      $this->paymentMethods = $paymentMethods;
      return $this;
    }

}
