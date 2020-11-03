<?php

namespace bbcreation\AllegroApi;

class ReasonInfoType
{

    /**
     * @var int $reasonId
     */
    protected $reasonId = null;

    /**
     * @var string $reasonName
     */
    protected $reasonName = null;

    /**
     * @var int $maxQuantity
     */
    protected $maxQuantity = null;

    /**
     * @param int $reasonId
     * @param string $reasonName
     */
    public function __construct($reasonId = null, $reasonName = null)
    {
      $this->reasonId = $reasonId;
      $this->reasonName = $reasonName;
    }

    /**
     * @return int
     */
    public function getReasonId()
    {
      return $this->reasonId;
    }

    /**
     * @param int $reasonId
     * @return \bbcreation\AllegroApi\ReasonInfoType
     */
    public function setReasonId($reasonId)
    {
      $this->reasonId = $reasonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonName()
    {
      return $this->reasonName;
    }

    /**
     * @param string $reasonName
     * @return \bbcreation\AllegroApi\ReasonInfoType
     */
    public function setReasonName($reasonName)
    {
      $this->reasonName = $reasonName;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxQuantity()
    {
      return $this->maxQuantity;
    }

    /**
     * @param int $maxQuantity
     * @return \bbcreation\AllegroApi\ReasonInfoType
     */
    public function setMaxQuantity($maxQuantity)
    {
      $this->maxQuantity = $maxQuantity;
      return $this;
    }

}
