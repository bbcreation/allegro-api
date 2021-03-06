<?php

namespace bbcreation\AllegroApi;

class doGetItemFieldsResponse
{

    /**
     * @var ArrayOfFieldsvalue $itemFields
     */
    protected $itemFields = null;

    /**
     * @var AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     */
    protected $afterSalesServiceConditions = null;

    /**
     * @var string $additionalServicesGroup
     */
    protected $additionalServicesGroup = null;

    /**
     * @param ArrayOfFieldsvalue $itemFields
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @param string $additionalServicesGroup
     */
    public function __construct($itemFields = null, $afterSalesServiceConditions = null, $additionalServicesGroup = null)
    {
      $this->itemFields = $itemFields;
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
      $this->additionalServicesGroup = $additionalServicesGroup;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getItemFields()
    {
      return $this->itemFields;
    }

    /**
     * @param ArrayOfFieldsvalue $itemFields
     * @return \bbcreation\AllegroApi\doGetItemFieldsResponse
     */
    public function setItemFields($itemFields)
    {
      $this->itemFields = $itemFields;
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
     * @return \bbcreation\AllegroApi\doGetItemFieldsResponse
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
     * @return \bbcreation\AllegroApi\doGetItemFieldsResponse
     */
    public function setAdditionalServicesGroup($additionalServicesGroup)
    {
      $this->additionalServicesGroup = $additionalServicesGroup;
      return $this;
    }

}
