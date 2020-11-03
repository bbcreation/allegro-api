<?php

namespace bbcreation\AllegroApi;

class PostBuyFormForBuyersDataStruct
{

    /**
     * @var int $postBuyFormId
     */
    protected $postBuyFormId = null;

    /**
     * @var int $postBuyFormBuyerId
     */
    protected $postBuyFormBuyerId = null;

    /**
     * @var ArrayOfPostbuyformsellersstruct $postBuyFormSellers
     */
    protected $postBuyFormSellers = null;

    /**
     * @var float $postBuyFormTotalAmount
     */
    protected $postBuyFormTotalAmount = null;

    /**
     * @var int $postBuyFormInvoiceOption
     */
    protected $postBuyFormInvoiceOption = null;

    /**
     * @var PostBuyFormAddressStruct $postBuyFormInvoiceData
     */
    protected $postBuyFormInvoiceData = null;

    /**
     * @var PostBuyFormAddressStruct $postBuyFormShipmentAddress
     */
    protected $postBuyFormShipmentAddress = null;

    /**
     * @var string $postBuyFormPayType
     */
    protected $postBuyFormPayType = null;

    /**
     * @var int $postBuyFormPayId
     */
    protected $postBuyFormPayId = null;

    /**
     * @var string $postBuyFormPayStatus
     */
    protected $postBuyFormPayStatus = null;

    /**
     * @var string $postBuyFormDateInit
     */
    protected $postBuyFormDateInit = null;

    /**
     * @var string $postBuyFormDateRecv
     */
    protected $postBuyFormDateRecv = null;

    /**
     * @var string $postBuyFormDateCancel
     */
    protected $postBuyFormDateCancel = null;

    /**
     * @var float $postBuyFormPaymentAmount
     */
    protected $postBuyFormPaymentAmount = null;

    /**
     * @param int $postBuyFormId
     * @param int $postBuyFormBuyerId
     * @param float $postBuyFormTotalAmount
     * @param int $postBuyFormInvoiceOption
     * @param PostBuyFormAddressStruct $postBuyFormShipmentAddress
     * @param string $postBuyFormPayType
     * @param int $postBuyFormPayId
     * @param string $postBuyFormPayStatus
     * @param string $postBuyFormDateInit
     * @param string $postBuyFormDateRecv
     * @param string $postBuyFormDateCancel
     * @param float $postBuyFormPaymentAmount
     */
    public function __construct($postBuyFormId = null, $postBuyFormBuyerId = null, $postBuyFormTotalAmount = null, $postBuyFormInvoiceOption = null, $postBuyFormShipmentAddress = null, $postBuyFormPayType = null, $postBuyFormPayId = null, $postBuyFormPayStatus = null, $postBuyFormDateInit = null, $postBuyFormDateRecv = null, $postBuyFormDateCancel = null, $postBuyFormPaymentAmount = null)
    {
      $this->postBuyFormId = $postBuyFormId;
      $this->postBuyFormBuyerId = $postBuyFormBuyerId;
      $this->postBuyFormTotalAmount = $postBuyFormTotalAmount;
      $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
      $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
      $this->postBuyFormPayType = $postBuyFormPayType;
      $this->postBuyFormPayId = $postBuyFormPayId;
      $this->postBuyFormPayStatus = $postBuyFormPayStatus;
      $this->postBuyFormDateInit = $postBuyFormDateInit;
      $this->postBuyFormDateRecv = $postBuyFormDateRecv;
      $this->postBuyFormDateCancel = $postBuyFormDateCancel;
      $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
    }

    /**
     * @return int
     */
    public function getPostBuyFormId()
    {
      return $this->postBuyFormId;
    }

    /**
     * @param int $postBuyFormId
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormId($postBuyFormId)
    {
      $this->postBuyFormId = $postBuyFormId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormBuyerId()
    {
      return $this->postBuyFormBuyerId;
    }

    /**
     * @param int $postBuyFormBuyerId
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormBuyerId($postBuyFormBuyerId)
    {
      $this->postBuyFormBuyerId = $postBuyFormBuyerId;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformsellersstruct
     */
    public function getPostBuyFormSellers()
    {
      return $this->postBuyFormSellers;
    }

    /**
     * @param ArrayOfPostbuyformsellersstruct $postBuyFormSellers
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormSellers($postBuyFormSellers)
    {
      $this->postBuyFormSellers = $postBuyFormSellers;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormTotalAmount()
    {
      return $this->postBuyFormTotalAmount;
    }

    /**
     * @param float $postBuyFormTotalAmount
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormTotalAmount($postBuyFormTotalAmount)
    {
      $this->postBuyFormTotalAmount = $postBuyFormTotalAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormInvoiceOption()
    {
      return $this->postBuyFormInvoiceOption;
    }

    /**
     * @param int $postBuyFormInvoiceOption
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormInvoiceOption($postBuyFormInvoiceOption)
    {
      $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
      return $this;
    }

    /**
     * @return PostBuyFormAddressStruct
     */
    public function getPostBuyFormInvoiceData()
    {
      return $this->postBuyFormInvoiceData;
    }

    /**
     * @param PostBuyFormAddressStruct $postBuyFormInvoiceData
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormInvoiceData($postBuyFormInvoiceData)
    {
      $this->postBuyFormInvoiceData = $postBuyFormInvoiceData;
      return $this;
    }

    /**
     * @return PostBuyFormAddressStruct
     */
    public function getPostBuyFormShipmentAddress()
    {
      return $this->postBuyFormShipmentAddress;
    }

    /**
     * @param PostBuyFormAddressStruct $postBuyFormShipmentAddress
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormShipmentAddress($postBuyFormShipmentAddress)
    {
      $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPayType()
    {
      return $this->postBuyFormPayType;
    }

    /**
     * @param string $postBuyFormPayType
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormPayType($postBuyFormPayType)
    {
      $this->postBuyFormPayType = $postBuyFormPayType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormPayId()
    {
      return $this->postBuyFormPayId;
    }

    /**
     * @param int $postBuyFormPayId
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormPayId($postBuyFormPayId)
    {
      $this->postBuyFormPayId = $postBuyFormPayId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPayStatus()
    {
      return $this->postBuyFormPayStatus;
    }

    /**
     * @param string $postBuyFormPayStatus
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormPayStatus($postBuyFormPayStatus)
    {
      $this->postBuyFormPayStatus = $postBuyFormPayStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateInit()
    {
      return $this->postBuyFormDateInit;
    }

    /**
     * @param string $postBuyFormDateInit
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormDateInit($postBuyFormDateInit)
    {
      $this->postBuyFormDateInit = $postBuyFormDateInit;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateRecv()
    {
      return $this->postBuyFormDateRecv;
    }

    /**
     * @param string $postBuyFormDateRecv
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormDateRecv($postBuyFormDateRecv)
    {
      $this->postBuyFormDateRecv = $postBuyFormDateRecv;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateCancel()
    {
      return $this->postBuyFormDateCancel;
    }

    /**
     * @param string $postBuyFormDateCancel
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormDateCancel($postBuyFormDateCancel)
    {
      $this->postBuyFormDateCancel = $postBuyFormDateCancel;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPaymentAmount()
    {
      return $this->postBuyFormPaymentAmount;
    }

    /**
     * @param float $postBuyFormPaymentAmount
     * @return \bbcreation\AllegroApi\PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormPaymentAmount($postBuyFormPaymentAmount)
    {
      $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
      return $this;
    }

}
