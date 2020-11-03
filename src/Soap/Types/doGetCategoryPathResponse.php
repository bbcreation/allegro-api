<?php

namespace bbcreation\AllegroApi;

class doGetCategoryPathResponse
{

    /**
     * @var ArrayOfCategorydata $categoryPath
     */
    protected $categoryPath = null;

    /**
     * @param ArrayOfCategorydata $categoryPath
     */
    public function __construct($categoryPath = null)
    {
      $this->categoryPath = $categoryPath;
    }

    /**
     * @return ArrayOfCategorydata
     */
    public function getCategoryPath()
    {
      return $this->categoryPath;
    }

    /**
     * @param ArrayOfCategorydata $categoryPath
     * @return \bbcreation\AllegroApi\doGetCategoryPathResponse
     */
    public function setCategoryPath($categoryPath)
    {
      $this->categoryPath = $categoryPath;
      return $this;
    }

}
