<?php

namespace bbcreation\AllegroApi;

class doGetRefundsDealsResponse
{

    /**
     * @var int $dealsCount
     */
    protected $dealsCount = null;

    /**
     * @var ArrayOfRefundsdealslisttype $dealsList
     */
    protected $dealsList = null;

    /**
     * @var ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @param int $dealsCount
     * @param ArrayOfRefundsdealslisttype $dealsList
     * @param ArrayOfFilterslisttype $filtersList
     */
    public function __construct($dealsCount = null, $dealsList = null, $filtersList = null)
    {
      $this->dealsCount = $dealsCount;
      $this->dealsList = $dealsList;
      $this->filtersList = $filtersList;
    }

    /**
     * @return int
     */
    public function getDealsCount()
    {
      return $this->dealsCount;
    }

    /**
     * @param int $dealsCount
     * @return \bbcreation\AllegroApi\doGetRefundsDealsResponse
     */
    public function setDealsCount($dealsCount)
    {
      $this->dealsCount = $dealsCount;
      return $this;
    }

    /**
     * @return ArrayOfRefundsdealslisttype
     */
    public function getDealsList()
    {
      return $this->dealsList;
    }

    /**
     * @param ArrayOfRefundsdealslisttype $dealsList
     * @return \bbcreation\AllegroApi\doGetRefundsDealsResponse
     */
    public function setDealsList($dealsList)
    {
      $this->dealsList = $dealsList;
      return $this;
    }

    /**
     * @return ArrayOfFilterslisttype
     */
    public function getFiltersList()
    {
      return $this->filtersList;
    }

    /**
     * @param ArrayOfFilterslisttype $filtersList
     * @return \bbcreation\AllegroApi\doGetRefundsDealsResponse
     */
    public function setFiltersList($filtersList)
    {
      $this->filtersList = $filtersList;
      return $this;
    }

}
