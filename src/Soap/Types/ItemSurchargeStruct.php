<?php

namespace bbcreation\AllegroApi;

class ItemSurchargeStruct
{

    /**
     * @var string $surchargeDescription
     */
    protected $surchargeDescription = null;

    /**
     * @var AmountStruct $surchargeAmount
     */
    protected $surchargeAmount = null;

    /**
     * @param string $surchargeDescription
     * @param AmountStruct $surchargeAmount
     */
    public function __construct($surchargeDescription = null, $surchargeAmount = null)
    {
      $this->surchargeDescription = $surchargeDescription;
      $this->surchargeAmount = $surchargeAmount;
    }

    /**
     * @return string
     */
    public function getSurchargeDescription()
    {
      return $this->surchargeDescription;
    }

    /**
     * @param string $surchargeDescription
     * @return \bbcreation\AllegroApi\ItemSurchargeStruct
     */
    public function setSurchargeDescription($surchargeDescription)
    {
      $this->surchargeDescription = $surchargeDescription;
      return $this;
    }

    /**
     * @return AmountStruct
     */
    public function getSurchargeAmount()
    {
      return $this->surchargeAmount;
    }

    /**
     * @param AmountStruct $surchargeAmount
     * @return \bbcreation\AllegroApi\ItemSurchargeStruct
     */
    public function setSurchargeAmount($surchargeAmount)
    {
      $this->surchargeAmount = $surchargeAmount;
      return $this;
    }

}
