<?php

namespace bbcreation\AllegroApi;

class SiteJournalInfo
{

    /**
     * @var int $itemsNumber
     */
    protected $itemsNumber = null;

    /**
     * @var int $lastItemDate
     */
    protected $lastItemDate = null;

    /**
     * @param int $itemsNumber
     * @param int $lastItemDate
     */
    public function __construct($itemsNumber = null, $lastItemDate = null)
    {
      $this->itemsNumber = $itemsNumber;
      $this->lastItemDate = $lastItemDate;
    }

    /**
     * @return int
     */
    public function getItemsNumber()
    {
      return $this->itemsNumber;
    }

    /**
     * @param int $itemsNumber
     * @return \bbcreation\AllegroApi\SiteJournalInfo
     */
    public function setItemsNumber($itemsNumber)
    {
      $this->itemsNumber = $itemsNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastItemDate()
    {
      return $this->lastItemDate;
    }

    /**
     * @param int $lastItemDate
     * @return \bbcreation\AllegroApi\SiteJournalInfo
     */
    public function setLastItemDate($lastItemDate)
    {
      $this->lastItemDate = $lastItemDate;
      return $this;
    }

}
