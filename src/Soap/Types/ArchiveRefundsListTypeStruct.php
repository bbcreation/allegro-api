<?php

namespace bbcreation\AllegroApi;

class ArchiveRefundsListTypeStruct
{

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var string $buyerLogin
     */
    protected $buyerLogin = null;

    /**
     * @param int $refundId
     * @param int $buyerId
     * @param string $buyerLogin
     */
    public function __construct($refundId = null, $buyerId = null, $buyerLogin = null)
    {
      $this->refundId = $refundId;
      $this->buyerId = $buyerId;
      $this->buyerLogin = $buyerLogin;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
      return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return \bbcreation\AllegroApi\ArchiveRefundsListTypeStruct
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
      return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return \bbcreation\AllegroApi\ArchiveRefundsListTypeStruct
     */
    public function setBuyerId($buyerId)
    {
      $this->buyerId = $buyerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerLogin()
    {
      return $this->buyerLogin;
    }

    /**
     * @param string $buyerLogin
     * @return \bbcreation\AllegroApi\ArchiveRefundsListTypeStruct
     */
    public function setBuyerLogin($buyerLogin)
    {
      $this->buyerLogin = $buyerLogin;
      return $this;
    }

}
