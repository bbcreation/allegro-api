<?php

namespace bbcreation\AllegroApi;

class ProductParametersStruct
{

    /**
     * @var string $productParameterName
     */
    protected $productParameterName = null;

    /**
     * @var ArrayOfString $productParameterValues
     */
    protected $productParameterValues = null;

    /**
     * @var string $productParameterDescription
     */
    protected $productParameterDescription = null;

    /**
     * @param string $productParameterName
     * @param string $productParameterDescription
     */
    public function __construct($productParameterName = null, $productParameterDescription = null)
    {
      $this->productParameterName = $productParameterName;
      $this->productParameterDescription = $productParameterDescription;
    }

    /**
     * @return string
     */
    public function getProductParameterName()
    {
      return $this->productParameterName;
    }

    /**
     * @param string $productParameterName
     * @return \bbcreation\AllegroApi\ProductParametersStruct
     */
    public function setProductParameterName($productParameterName)
    {
      $this->productParameterName = $productParameterName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getProductParameterValues()
    {
      return $this->productParameterValues;
    }

    /**
     * @param ArrayOfString $productParameterValues
     * @return \bbcreation\AllegroApi\ProductParametersStruct
     */
    public function setProductParameterValues($productParameterValues)
    {
      $this->productParameterValues = $productParameterValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductParameterDescription()
    {
      return $this->productParameterDescription;
    }

    /**
     * @param string $productParameterDescription
     * @return \bbcreation\AllegroApi\ProductParametersStruct
     */
    public function setProductParameterDescription($productParameterDescription)
    {
      $this->productParameterDescription = $productParameterDescription;
      return $this;
    }

}
