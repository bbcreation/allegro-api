<?php

namespace bbcreation\AllegroApi;

class VariantQuantityStruct
{

    /**
     * @var int $mask
     */
    protected $mask = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @param int $mask
     * @param int $quantity
     */
    public function __construct($mask = null, $quantity = null)
    {
      $this->mask = $mask;
      $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getMask()
    {
      return $this->mask;
    }

    /**
     * @param int $mask
     * @return \bbcreation\AllegroApi\VariantQuantityStruct
     */
    public function setMask($mask)
    {
      $this->mask = $mask;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \bbcreation\AllegroApi\VariantQuantityStruct
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
