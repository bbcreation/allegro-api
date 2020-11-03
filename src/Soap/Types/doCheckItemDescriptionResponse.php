<?php

namespace bbcreation\AllegroApi;

class doCheckItemDescriptionResponse
{

    /**
     * @var ItemDescriptionStruct $itemDescription
     */
    protected $itemDescription = null;

    /**
     * @param ItemDescriptionStruct $itemDescription
     */
    public function __construct($itemDescription = null)
    {
      $this->itemDescription = $itemDescription;
    }

    /**
     * @return ItemDescriptionStruct
     */
    public function getItemDescription()
    {
      return $this->itemDescription;
    }

    /**
     * @param ItemDescriptionStruct $itemDescription
     * @return \bbcreation\AllegroApi\doCheckItemDescriptionResponse
     */
    public function setItemDescription($itemDescription)
    {
      $this->itemDescription = $itemDescription;
      return $this;
    }

}
