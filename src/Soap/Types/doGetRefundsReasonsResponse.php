<?php

namespace bbcreation\AllegroApi;

class doGetRefundsReasonsResponse
{

    /**
     * @var int $reasonsCount
     */
    protected $reasonsCount = null;

    /**
     * @var ArrayOfReasoninfotype $reasonsList
     */
    protected $reasonsList = null;

    /**
     * @param int $reasonsCount
     * @param ArrayOfReasoninfotype $reasonsList
     */
    public function __construct($reasonsCount = null, $reasonsList = null)
    {
      $this->reasonsCount = $reasonsCount;
      $this->reasonsList = $reasonsList;
    }

    /**
     * @return int
     */
    public function getReasonsCount()
    {
      return $this->reasonsCount;
    }

    /**
     * @param int $reasonsCount
     * @return \bbcreation\AllegroApi\doGetRefundsReasonsResponse
     */
    public function setReasonsCount($reasonsCount)
    {
      $this->reasonsCount = $reasonsCount;
      return $this;
    }

    /**
     * @return ArrayOfReasoninfotype
     */
    public function getReasonsList()
    {
      return $this->reasonsList;
    }

    /**
     * @param ArrayOfReasoninfotype $reasonsList
     * @return \bbcreation\AllegroApi\doGetRefundsReasonsResponse
     */
    public function setReasonsList($reasonsList)
    {
      $this->reasonsList = $reasonsList;
      return $this;
    }

}
