<?php

namespace bbcreation\AllegroApi;

class DoGetMyNotWonItemsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var SortOptionsStruct $sortOptions
     */
    protected $sortOptions = null;

    /**
     * @var string $searchValue
     */
    protected $searchValue = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var ArrayOfLong $itemIds
     */
    protected $itemIds = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @param string $sessionId
     * @param SortOptionsStruct $sortOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     */
    public function __construct($sessionId = null, $sortOptions = null, $searchValue = null, $categoryId = null, $itemIds = null, $pageSize = null, $pageNumber = null)
    {
      $this->sessionId = $sessionId;
      $this->sortOptions = $sortOptions;
      $this->searchValue = $searchValue;
      $this->categoryId = $categoryId;
      $this->itemIds = $itemIds;
      $this->pageSize = $pageSize;
      $this->pageNumber = $pageNumber;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return SortOptionsStruct
     */
    public function getSortOptions()
    {
      return $this->sortOptions;
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setSortOptions($sortOptions)
    {
      $this->sortOptions = $sortOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param string $searchValue
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemIds()
    {
      return $this->itemIds;
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setItemIds($itemIds)
    {
      $this->itemIds = $itemIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return \bbcreation\AllegroApi\DoGetMyNotWonItemsRequest
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
      return $this;
    }

}
