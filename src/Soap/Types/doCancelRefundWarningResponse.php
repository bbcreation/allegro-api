<?php

namespace bbcreation\AllegroApi;

class doCancelRefundWarningResponse
{

    /**
     * @var boolean $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param boolean $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return boolean
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param boolean $cancellationResult
     * @return \bbcreation\AllegroApi\doCancelRefundWarningResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
