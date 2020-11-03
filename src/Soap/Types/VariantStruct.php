<?php

namespace bbcreation\AllegroApi;

class VariantStruct
{

    /**
     * @var int $fid
     */
    protected $fid = null;

    /**
     * @var ArrayOfVariantquantitystruct $quantities
     */
    protected $quantities = null;

    /**
     * @param int $fid
     */
    public function __construct($fid = null)
    {
      $this->fid = $fid;
    }

    /**
     * @return int
     */
    public function getFid()
    {
      return $this->fid;
    }

    /**
     * @param int $fid
     * @return \bbcreation\AllegroApi\VariantStruct
     */
    public function setFid($fid)
    {
      $this->fid = $fid;
      return $this;
    }

    /**
     * @return ArrayOfVariantquantitystruct
     */
    public function getQuantities()
    {
      return $this->quantities;
    }

    /**
     * @param ArrayOfVariantquantitystruct $quantities
     * @return \bbcreation\AllegroApi\VariantStruct
     */
    public function setQuantities($quantities)
    {
      $this->quantities = $quantities;
      return $this;
    }

}
