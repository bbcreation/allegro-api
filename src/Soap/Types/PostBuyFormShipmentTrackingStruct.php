<?php

namespace bbcreation\AllegroApi;

class PostBuyFormShipmentTrackingStruct
{

    /**
     * @var int $postBuyFormOperatorId
     */
    protected $postBuyFormOperatorId = null;

    /**
     * @var string $postBuyFormOperatorName
     */
    protected $postBuyFormOperatorName = null;

    /**
     * @var string $postBuyFormPackageId
     */
    protected $postBuyFormPackageId = null;

    /**
     * @var string $postBuyFormPackageStatus
     */
    protected $postBuyFormPackageStatus = null;

    /**
     * @param int $postBuyFormOperatorId
     * @param string $postBuyFormOperatorName
     * @param string $postBuyFormPackageId
     * @param string $postBuyFormPackageStatus
     */
    public function __construct($postBuyFormOperatorId = null, $postBuyFormOperatorName = null, $postBuyFormPackageId = null, $postBuyFormPackageStatus = null)
    {
      $this->postBuyFormOperatorId = $postBuyFormOperatorId;
      $this->postBuyFormOperatorName = $postBuyFormOperatorName;
      $this->postBuyFormPackageId = $postBuyFormPackageId;
      $this->postBuyFormPackageStatus = $postBuyFormPackageStatus;
    }

    /**
     * @return int
     */
    public function getPostBuyFormOperatorId()
    {
      return $this->postBuyFormOperatorId;
    }

    /**
     * @param int $postBuyFormOperatorId
     * @return \bbcreation\AllegroApi\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormOperatorId($postBuyFormOperatorId)
    {
      $this->postBuyFormOperatorId = $postBuyFormOperatorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormOperatorName()
    {
      return $this->postBuyFormOperatorName;
    }

    /**
     * @param string $postBuyFormOperatorName
     * @return \bbcreation\AllegroApi\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormOperatorName($postBuyFormOperatorName)
    {
      $this->postBuyFormOperatorName = $postBuyFormOperatorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPackageId()
    {
      return $this->postBuyFormPackageId;
    }

    /**
     * @param string $postBuyFormPackageId
     * @return \bbcreation\AllegroApi\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormPackageId($postBuyFormPackageId)
    {
      $this->postBuyFormPackageId = $postBuyFormPackageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPackageStatus()
    {
      return $this->postBuyFormPackageStatus;
    }

    /**
     * @param string $postBuyFormPackageStatus
     * @return \bbcreation\AllegroApi\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormPackageStatus($postBuyFormPackageStatus)
    {
      $this->postBuyFormPackageStatus = $postBuyFormPackageStatus;
      return $this;
    }

}
