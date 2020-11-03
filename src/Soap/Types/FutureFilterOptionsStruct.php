<?php

namespace bbcreation\AllegroApi;

class FutureFilterOptionsStruct
{

    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFilterFormat()
    {
      return $this->filterFormat;
    }

    /**
     * @param int $filterFormat
     * @return \bbcreation\AllegroApi\FutureFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
      $this->filterFormat = $filterFormat;
      return $this;
    }

}
