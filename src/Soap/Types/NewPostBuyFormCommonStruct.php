<?php

namespace bbcreation\AllegroApi;

class NewPostBuyFormCommonStruct
{

    /**
     * @var string $paymentMethodId
     */
    protected $paymentMethodId = null;

    /**
     * @var int $shipmentAddressType
     */
    protected $shipmentAddressType = null;

    /**
     * @var AddressUserDataStruct $shipmentAddressData
     */
    protected $shipmentAddressData = null;

    /**
     * @var string $contactPhone
     */
    protected $contactPhone = null;

    /**
     * @var int $invoiceOption
     */
    protected $invoiceOption = null;

    /**
     * @var InvoiceInfoStruct $invoiceInfo
     */
    protected $invoiceInfo = null;

    /**
     * @param string $paymentMethodId
     * @param int $shipmentAddressType
     * @param int $invoiceOption
     */
    public function __construct($paymentMethodId = null, $shipmentAddressType = null, $invoiceOption = null)
    {
      $this->paymentMethodId = $paymentMethodId;
      $this->shipmentAddressType = $shipmentAddressType;
      $this->invoiceOption = $invoiceOption;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
      return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return \bbcreation\AllegroApi\NewPostBuyFormCommonStruct
     */
    public function setPaymentMethodId($paymentMethodId)
    {
      $this->paymentMethodId = $paymentMethodId;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentAddressType()
    {
      return $this->shipmentAddressType;
    }

    /**
     * @param int $shipmentAddressType
     * @return \bbcreation\AllegroApi\NewPostBuyFormCommonStruct
     */
    public function setShipmentAddressType($shipmentAddressType)
    {
      $this->shipmentAddressType = $shipmentAddressType;
      return $this;
    }

    /**
     * @return AddressUserDataStruct
     */
    public function getShipmentAddressData()
    {
      return $this->shipmentAddressData;
    }

    /**
     * @param AddressUserDataStruct $shipmentAddressData
     * @return \bbcreation\AllegroApi\NewPostBuyFormCommonStruct
     */
    public function setShipmentAddressData($shipmentAddressData)
    {
      $this->shipmentAddressData = $shipmentAddressData;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
      return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return \bbcreation\AllegroApi\NewPostBuyFormCommonStruct
     */
    public function setContactPhone($contactPhone)
    {
      $this->contactPhone = $contactPhone;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceOption()
    {
      return $this->invoiceOption;
    }

    /**
     * @param int $invoiceOption
     * @return \bbcreation\AllegroApi\NewPostBuyFormCommonStruct
     */
    public function setInvoiceOption($invoiceOption)
    {
      $this->invoiceOption = $invoiceOption;
      return $this;
    }

    /**
     * @return InvoiceInfoStruct
     */
    public function getInvoiceInfo()
    {
      return $this->invoiceInfo;
    }

    /**
     * @param InvoiceInfoStruct $invoiceInfo
     * @return \bbcreation\AllegroApi\NewPostBuyFormCommonStruct
     */
    public function setInvoiceInfo($invoiceInfo)
    {
      $this->invoiceInfo = $invoiceInfo;
      return $this;
    }

}
