<?php

namespace bbcreation\AllegroApi;

class doGetCountriesResponse
{

    /**
     * @var ArrayOfCountryinfotype $countryArray
     */
    protected $countryArray = null;

    /**
     * @param ArrayOfCountryinfotype $countryArray
     */
    public function __construct($countryArray = null)
    {
      $this->countryArray = $countryArray;
    }

    /**
     * @return ArrayOfCountryinfotype
     */
    public function getCountryArray()
    {
      return $this->countryArray;
    }

    /**
     * @param ArrayOfCountryinfotype $countryArray
     * @return \bbcreation\AllegroApi\doGetCountriesResponse
     */
    public function setCountryArray($countryArray)
    {
      $this->countryArray = $countryArray;
      return $this;
    }

}
