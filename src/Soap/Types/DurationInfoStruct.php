<?php

namespace bbcreation\AllegroApi;

class DurationInfoStruct
{

    /**
     * @var int $durationType
     */
    protected $durationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
      return $this->durationType;
    }

    /**
     * @param int $durationType
     * @return \bbcreation\AllegroApi\DurationInfoStruct
     */
    public function setDurationType($durationType)
    {
      $this->durationType = $durationType;
      return $this;
    }

}
