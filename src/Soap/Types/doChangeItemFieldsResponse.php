<?php

namespace bbcreation\AllegroApi;

class doChangeItemFieldsResponse
{

    /**
     * @var ChangedItemStruct $changedItem
     */
    protected $changedItem = null;

    /**
     * @param ChangedItemStruct $changedItem
     */
    public function __construct($changedItem = null)
    {
      $this->changedItem = $changedItem;
    }

    /**
     * @return ChangedItemStruct
     */
    public function getChangedItem()
    {
      return $this->changedItem;
    }

    /**
     * @param ChangedItemStruct $changedItem
     * @return \bbcreation\AllegroApi\doChangeItemFieldsResponse
     */
    public function setChangedItem($changedItem)
    {
      $this->changedItem = $changedItem;
      return $this;
    }

}
