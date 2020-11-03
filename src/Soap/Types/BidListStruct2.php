<?php

namespace bbcreation\AllegroApi;

class BidListStruct2
{

    /**
     * @var ArrayOfString $bidsArray
     */
    protected $bidsArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getBidsArray()
    {
      return $this->bidsArray;
    }

    /**
     * @param ArrayOfString $bidsArray
     * @return \bbcreation\AllegroApi\BidListStruct2
     */
    public function setBidsArray($bidsArray)
    {
      $this->bidsArray = $bidsArray;
      return $this;
    }

}
