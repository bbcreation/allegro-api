<?php

namespace bbcreation\AllegroApi;

class doCancelTransactionResponse
{

    /**
     * @var int $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param int $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return int
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param int $cancellationResult
     * @return \bbcreation\AllegroApi\doCancelTransactionResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
