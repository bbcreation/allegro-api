<?php

namespace bbcreation\AllegroApi;

class doGetMessageToBuyerResponse
{

    /**
     * @var MessageToBuyerStruct $messageToBuyer
     */
    protected $messageToBuyer = null;

    /**
     * @param MessageToBuyerStruct $messageToBuyer
     */
    public function __construct($messageToBuyer = null)
    {
      $this->messageToBuyer = $messageToBuyer;
    }

    /**
     * @return MessageToBuyerStruct
     */
    public function getMessageToBuyer()
    {
      return $this->messageToBuyer;
    }

    /**
     * @param MessageToBuyerStruct $messageToBuyer
     * @return \bbcreation\AllegroApi\doGetMessageToBuyerResponse
     */
    public function setMessageToBuyer($messageToBuyer)
    {
      $this->messageToBuyer = $messageToBuyer;
      return $this;
    }

}
