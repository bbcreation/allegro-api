<?php

namespace bbcreation\AllegroApi;

class RangeValueType
{

    /**
     * @var string $rangeValueMin
     */
    protected $rangeValueMin = null;

    /**
     * @var string $rangeValueMax
     */
    protected $rangeValueMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRangeValueMin()
    {
      return $this->rangeValueMin;
    }

    /**
     * @param string $rangeValueMin
     * @return \bbcreation\AllegroApi\RangeValueType
     */
    public function setRangeValueMin($rangeValueMin)
    {
      $this->rangeValueMin = $rangeValueMin;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeValueMax()
    {
      return $this->rangeValueMax;
    }

    /**
     * @param string $rangeValueMax
     * @return \bbcreation\AllegroApi\RangeValueType
     */
    public function setRangeValueMax($rangeValueMax)
    {
      $this->rangeValueMax = $rangeValueMax;
      return $this;
    }

}
