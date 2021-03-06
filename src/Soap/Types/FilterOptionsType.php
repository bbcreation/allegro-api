<?php

namespace bbcreation\AllegroApi;

class FilterOptionsType
{

    /**
     * @var string $filterId
     */
    protected $filterId = null;

    /**
     * @var ArrayOfString $filterValueId
     */
    protected $filterValueId = null;

    /**
     * @var RangeValueType $filterValueRange
     */
    protected $filterValueRange = null;

    /**
     * @param string $filterId
     */
    public function __construct($filterId = null)
    {
      $this->filterId = $filterId;
    }

    /**
     * @return string
     */
    public function getFilterId()
    {
      return $this->filterId;
    }

    /**
     * @param string $filterId
     * @return \bbcreation\AllegroApi\FilterOptionsType
     */
    public function setFilterId($filterId)
    {
      $this->filterId = $filterId;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFilterValueId()
    {
      return $this->filterValueId;
    }

    /**
     * @param ArrayOfString $filterValueId
     * @return \bbcreation\AllegroApi\FilterOptionsType
     */
    public function setFilterValueId($filterValueId)
    {
      $this->filterValueId = $filterValueId;
      return $this;
    }

    /**
     * @return RangeValueType
     */
    public function getFilterValueRange()
    {
      return $this->filterValueRange;
    }

    /**
     * @param RangeValueType $filterValueRange
     * @return \bbcreation\AllegroApi\FilterOptionsType
     */
    public function setFilterValueRange($filterValueRange)
    {
      $this->filterValueRange = $filterValueRange;
      return $this;
    }

}
