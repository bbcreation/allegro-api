<?php

namespace bbcreation\AllegroApi;

class FilledPostBuyFormsStruct
{

    /**
     * @var ArrayOfLong $transactionIds
     */
    protected $transactionIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionIds()
    {
      return $this->transactionIds;
    }

    /**
     * @param ArrayOfLong $transactionIds
     * @return \bbcreation\AllegroApi\FilledPostBuyFormsStruct
     */
    public function setTransactionIds($transactionIds)
    {
      $this->transactionIds = $transactionIds;
      return $this;
    }

}
