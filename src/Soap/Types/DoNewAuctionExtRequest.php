<?php

namespace bbcreation\AllegroApi;

class DoNewAuctionExtRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfFieldsvalue $fields
     */
    protected $fields = null;

    /**
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @var int $localId
     */
    protected $localId = null;

    /**
     * @var ItemTemplateCreateStruct $itemTemplateCreate
     */
    protected $itemTemplateCreate = null;

    /**
     * @var ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @var ArrayOfTagnamestruct $tags
     */
    protected $tags = null;

    /**
     * @var AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     */
    protected $afterSalesServiceConditions = null;

    /**
     * @var string $additionalServicesGroup
     */
    protected $additionalServicesGroup = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfFieldsvalue $fields
     * @param int $itemTemplateId
     * @param int $localId
     * @param ItemTemplateCreateStruct $itemTemplateCreate
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @param string $additionalServicesGroup
     */
    public function __construct($sessionHandle = null, $fields = null, $itemTemplateId = null, $localId = null, $itemTemplateCreate = null, $variants = null, $tags = null, $afterSalesServiceConditions = null, $additionalServicesGroup = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->fields = $fields;
      $this->itemTemplateId = $itemTemplateId;
      $this->localId = $localId;
      $this->itemTemplateCreate = $itemTemplateCreate;
      $this->variants = $variants;
      $this->tags = $tags;
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
      $this->additionalServicesGroup = $additionalServicesGroup;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param ArrayOfFieldsvalue $fields
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemTemplateId()
    {
      return $this->itemTemplateId;
    }

    /**
     * @param int $itemTemplateId
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setItemTemplateId($itemTemplateId)
    {
      $this->itemTemplateId = $itemTemplateId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalId()
    {
      return $this->localId;
    }

    /**
     * @param int $localId
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setLocalId($localId)
    {
      $this->localId = $localId;
      return $this;
    }

    /**
     * @return ItemTemplateCreateStruct
     */
    public function getItemTemplateCreate()
    {
      return $this->itemTemplateCreate;
    }

    /**
     * @param ItemTemplateCreateStruct $itemTemplateCreate
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setItemTemplateCreate($itemTemplateCreate)
    {
      $this->itemTemplateCreate = $itemTemplateCreate;
      return $this;
    }

    /**
     * @return ArrayOfVariantstruct
     */
    public function getVariants()
    {
      return $this->variants;
    }

    /**
     * @param ArrayOfVariantstruct $variants
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setVariants($variants)
    {
      $this->variants = $variants;
      return $this;
    }

    /**
     * @return ArrayOfTagnamestruct
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param ArrayOfTagnamestruct $tags
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

    /**
     * @return AfterSalesServiceConditionsStruct
     */
    public function getAfterSalesServiceConditions()
    {
      return $this->afterSalesServiceConditions;
    }

    /**
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setAfterSalesServiceConditions($afterSalesServiceConditions)
    {
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalServicesGroup()
    {
      return $this->additionalServicesGroup;
    }

    /**
     * @param string $additionalServicesGroup
     * @return \bbcreation\AllegroApi\DoNewAuctionExtRequest
     */
    public function setAdditionalServicesGroup($additionalServicesGroup)
    {
      $this->additionalServicesGroup = $additionalServicesGroup;
      return $this;
    }

}
