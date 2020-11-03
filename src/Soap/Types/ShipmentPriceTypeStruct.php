<?php

namespace bbcreation\AllegroApi;

class ShipmentPriceTypeStruct
{

    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @var string $shipmentPriceTypeName
     */
    protected $shipmentPriceTypeName = null;

    /**
     * @param int $shipmentPriceTypeId
     * @param string $shipmentPriceTypeName
     */
    public function __construct($shipmentPriceTypeId = null, $shipmentPriceTypeName = null)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
      $this->shipmentPriceTypeName = $shipmentPriceTypeName;
    }

    /**
     * @return int
     */
    public function getShipmentPriceTypeId()
    {
      return $this->shipmentPriceTypeId;
    }

    /**
     * @param int $shipmentPriceTypeId
     * @return \bbcreation\AllegroApi\ShipmentPriceTypeStruct
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentPriceTypeName()
    {
      return $this->shipmentPriceTypeName;
    }

    /**
     * @param string $shipmentPriceTypeName
     * @return \bbcreation\AllegroApi\ShipmentPriceTypeStruct
     */
    public function setShipmentPriceTypeName($shipmentPriceTypeName)
    {
      $this->shipmentPriceTypeName = $shipmentPriceTypeName;
      return $this;
    }

}
