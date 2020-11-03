<?php

namespace bbcreation\AllegroApi;

class DoGetItemsListRequest
{

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var ArrayOfFilteroptionstype $filterOptions
     */
    protected $filterOptions = null;

    /**
     * @var SortOptionsType $sortOptions
     */
    protected $sortOptions = null;

    /**
     * @var int $resultSize
     */
    protected $resultSize = null;

    /**
     * @var int $resultOffset
     */
    protected $resultOffset = null;

    /**
     * @var int $resultScope
     */
    protected $resultScope = null;

    /**
     * @param string $webapiKey
     * @param int $countryId
     * @param ArrayOfFilteroptionstype $filterOptions
     * @param SortOptionsType $sortOptions
     * @param int $resultSize
     * @param int $resultOffset
     * @param int $resultScope
     */
    public function __construct($webapiKey = null, $countryId = null, $filterOptions = null, $sortOptions = null, $resultSize = null, $resultOffset = null, $resultScope = null)
    {
      $this->webapiKey = $webapiKey;
      $this->countryId = $countryId;
      $this->filterOptions = $filterOptions;
      $this->sortOptions = $sortOptions;
      $this->resultSize = $resultSize;
      $this->resultOffset = $resultOffset;
      $this->resultScope = $resultScope;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return ArrayOfFilteroptionstype
     */
    public function getFilterOptions()
    {
      return $this->filterOptions;
    }

    /**
     * @param ArrayOfFilteroptionstype $filterOptions
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setFilterOptions($filterOptions)
    {
      $this->filterOptions = $filterOptions;
      return $this;
    }

    /**
     * @return SortOptionsType
     */
    public function getSortOptions()
    {
      return $this->sortOptions;
    }

    /**
     * @param SortOptionsType $sortOptions
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setSortOptions($sortOptions)
    {
      $this->sortOptions = $sortOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultSize()
    {
      return $this->resultSize;
    }

    /**
     * @param int $resultSize
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setResultSize($resultSize)
    {
      $this->resultSize = $resultSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultOffset()
    {
      return $this->resultOffset;
    }

    /**
     * @param int $resultOffset
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setResultOffset($resultOffset)
    {
      $this->resultOffset = $resultOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultScope()
    {
      return $this->resultScope;
    }

    /**
     * @param int $resultScope
     * @return \bbcreation\AllegroApi\DoGetItemsListRequest
     */
    public function setResultScope($resultScope)
    {
      $this->resultScope = $resultScope;
      return $this;
    }

}
