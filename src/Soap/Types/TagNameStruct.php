<?php

namespace bbcreation\AllegroApi;

class TagNameStruct
{

    /**
     * @var string $tagName
     */
    protected $tagName = null;

    /**
     * @param string $tagName
     */
    public function __construct($tagName = null)
    {
      $this->tagName = $tagName;
    }

    /**
     * @return string
     */
    public function getTagName()
    {
      return $this->tagName;
    }

    /**
     * @param string $tagName
     * @return \bbcreation\AllegroApi\TagNameStruct
     */
    public function setTagName($tagName)
    {
      $this->tagName = $tagName;
      return $this;
    }

}
