<?php

namespace bbcreation\AllegroApi;

class StateInfoStruct
{

    /**
     * @var int $stateId
     */
    protected $stateId = null;

    /**
     * @var string $stateName
     */
    protected $stateName = null;

    /**
     * @param int $stateId
     * @param string $stateName
     */
    public function __construct($stateId = null, $stateName = null)
    {
      $this->stateId = $stateId;
      $this->stateName = $stateName;
    }

    /**
     * @return int
     */
    public function getStateId()
    {
      return $this->stateId;
    }

    /**
     * @param int $stateId
     * @return \bbcreation\AllegroApi\StateInfoStruct
     */
    public function setStateId($stateId)
    {
      $this->stateId = $stateId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateName()
    {
      return $this->stateName;
    }

    /**
     * @param string $stateName
     * @return \bbcreation\AllegroApi\StateInfoStruct
     */
    public function setStateName($stateName)
    {
      $this->stateName = $stateName;
      return $this;
    }

}
