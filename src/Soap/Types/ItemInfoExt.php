<?php

namespace bbcreation\AllegroApi;

class ItemInfoExt
{

    /**
     * @var int $itId
     */
    protected $itId = null;

    /**
     * @var int $itCountry
     */
    protected $itCountry = null;

    /**
     * @var string $itName
     */
    protected $itName = null;

    /**
     * @var float $itPrice
     */
    protected $itPrice = null;

    /**
     * @var int $itBidCount
     */
    protected $itBidCount = null;

    /**
     * @var int $itEndingTime
     */
    protected $itEndingTime = null;

    /**
     * @var int $itSellerId
     */
    protected $itSellerId = null;

    /**
     * @var string $itSellerLogin
     */
    protected $itSellerLogin = null;

    /**
     * @var int $itSellerRating
     */
    protected $itSellerRating = null;

    /**
     * @var int $itStartingTime
     */
    protected $itStartingTime = null;

    /**
     * @var float $itStartingPrice
     */
    protected $itStartingPrice = null;

    /**
     * @var int $itQuantity
     */
    protected $itQuantity = null;

    /**
     * @var int $itFotoCount
     */
    protected $itFotoCount = null;

    /**
     * @var float $itReservePrice
     */
    protected $itReservePrice = null;

    /**
     * @var string $itLocation
     */
    protected $itLocation = null;

    /**
     * @var float $itBuyNowPrice
     */
    protected $itBuyNowPrice = null;

    /**
     * @var int $itBuyNowActive
     */
    protected $itBuyNowActive = null;

    /**
     * @var float $itAdvertisementPrice
     */
    protected $itAdvertisementPrice = null;

    /**
     * @var int $itAdvertisementActive
     */
    protected $itAdvertisementActive = null;

    /**
     * @var int $itHighBidder
     */
    protected $itHighBidder = null;

    /**
     * @var string $itHighBidderLogin
     */
    protected $itHighBidderLogin = null;

    /**
     * @var string $itDescription
     */
    protected $itDescription = null;

    /**
     * @var string $itStandardizedDescription
     */
    protected $itStandardizedDescription = null;

    /**
     * @var int $itOptions
     */
    protected $itOptions = null;

    /**
     * @var int $itState
     */
    protected $itState = null;

    /**
     * @var float $itWireTransfer
     */
    protected $itWireTransfer = null;

    /**
     * @var float $itPostDelivery
     */
    protected $itPostDelivery = null;

    /**
     * @var string $itPostInfo
     */
    protected $itPostInfo = null;

    /**
     * @var int $itQuantityType
     */
    protected $itQuantityType = null;

    /**
     * @var int $itIsEco
     */
    protected $itIsEco = null;

    /**
     * @var int $itHitCount
     */
    protected $itHitCount = null;

    /**
     * @var string $itPostcode
     */
    protected $itPostcode = null;

    /**
     * @var int $itVatInvoice
     */
    protected $itVatInvoice = null;

    /**
     * @var int $itVatMarginInvoice
     */
    protected $itVatMarginInvoice = null;

    /**
     * @var int $itWithoutVatInvoice
     */
    protected $itWithoutVatInvoice = null;

    /**
     * @var string $itBankAccount1
     */
    protected $itBankAccount1 = null;

    /**
     * @var string $itBankAccount2
     */
    protected $itBankAccount2 = null;

    /**
     * @var int $itStartingQuantity
     */
    protected $itStartingQuantity = null;

    /**
     * @var int $itIsForGuests
     */
    protected $itIsForGuests = null;

    /**
     * @var int $itHasProduct
     */
    protected $itHasProduct = null;

    /**
     * @var int $itOrderFulfillmentTime
     */
    protected $itOrderFulfillmentTime = null;

    /**
     * @var int $itEndingInfo
     */
    protected $itEndingInfo = null;

    /**
     * @var int $itIsAllegroStandard
     */
    protected $itIsAllegroStandard = null;

    /**
     * @var int $itIsNewUsed
     */
    protected $itIsNewUsed = null;

    /**
     * @var int $itIsBrandZone
     */
    protected $itIsBrandZone = null;

    /**
     * @var int $itIsFulfillmentTimeActive
     */
    protected $itIsFulfillmentTimeActive = null;

    /**
     * @var string $itEan
     */
    protected $itEan = null;

    /**
     * @var string $itContact
     */
    protected $itContact = null;

    /**
     * @param int $itId
     * @param int $itCountry
     * @param string $itName
     * @param float $itPrice
     * @param int $itBidCount
     * @param int $itEndingTime
     * @param int $itSellerId
     * @param string $itSellerLogin
     * @param int $itSellerRating
     * @param int $itStartingTime
     * @param float $itStartingPrice
     * @param int $itQuantity
     * @param int $itFotoCount
     * @param float $itReservePrice
     * @param string $itLocation
     * @param float $itBuyNowPrice
     * @param int $itBuyNowActive
     * @param int $itHighBidder
     * @param string $itHighBidderLogin
     * @param string $itDescription
     * @param int $itOptions
     * @param int $itState
     * @param float $itWireTransfer
     * @param float $itPostDelivery
     * @param string $itPostInfo
     * @param int $itQuantityType
     * @param int $itIsEco
     * @param int $itHitCount
     * @param string $itPostcode
     * @param int $itVatInvoice
     * @param int $itVatMarginInvoice
     * @param int $itWithoutVatInvoice
     * @param string $itBankAccount1
     * @param string $itBankAccount2
     * @param int $itStartingQuantity
     * @param int $itIsForGuests
     * @param int $itHasProduct
     * @param int $itOrderFulfillmentTime
     * @param int $itEndingInfo
     * @param int $itIsAllegroStandard
     * @param int $itIsNewUsed
     */
    public function __construct($itId = null, $itCountry = null, $itName = null, $itPrice = null, $itBidCount = null, $itEndingTime = null, $itSellerId = null, $itSellerLogin = null, $itSellerRating = null, $itStartingTime = null, $itStartingPrice = null, $itQuantity = null, $itFotoCount = null, $itReservePrice = null, $itLocation = null, $itBuyNowPrice = null, $itBuyNowActive = null, $itHighBidder = null, $itHighBidderLogin = null, $itDescription = null, $itOptions = null, $itState = null, $itWireTransfer = null, $itPostDelivery = null, $itPostInfo = null, $itQuantityType = null, $itIsEco = null, $itHitCount = null, $itPostcode = null, $itVatInvoice = null, $itVatMarginInvoice = null, $itWithoutVatInvoice = null, $itBankAccount1 = null, $itBankAccount2 = null, $itStartingQuantity = null, $itIsForGuests = null, $itHasProduct = null, $itOrderFulfillmentTime = null, $itEndingInfo = null, $itIsAllegroStandard = null, $itIsNewUsed = null)
    {
      $this->itId = $itId;
      $this->itCountry = $itCountry;
      $this->itName = $itName;
      $this->itPrice = $itPrice;
      $this->itBidCount = $itBidCount;
      $this->itEndingTime = $itEndingTime;
      $this->itSellerId = $itSellerId;
      $this->itSellerLogin = $itSellerLogin;
      $this->itSellerRating = $itSellerRating;
      $this->itStartingTime = $itStartingTime;
      $this->itStartingPrice = $itStartingPrice;
      $this->itQuantity = $itQuantity;
      $this->itFotoCount = $itFotoCount;
      $this->itReservePrice = $itReservePrice;
      $this->itLocation = $itLocation;
      $this->itBuyNowPrice = $itBuyNowPrice;
      $this->itBuyNowActive = $itBuyNowActive;
      $this->itHighBidder = $itHighBidder;
      $this->itHighBidderLogin = $itHighBidderLogin;
      $this->itDescription = $itDescription;
      $this->itOptions = $itOptions;
      $this->itState = $itState;
      $this->itWireTransfer = $itWireTransfer;
      $this->itPostDelivery = $itPostDelivery;
      $this->itPostInfo = $itPostInfo;
      $this->itQuantityType = $itQuantityType;
      $this->itIsEco = $itIsEco;
      $this->itHitCount = $itHitCount;
      $this->itPostcode = $itPostcode;
      $this->itVatInvoice = $itVatInvoice;
      $this->itVatMarginInvoice = $itVatMarginInvoice;
      $this->itWithoutVatInvoice = $itWithoutVatInvoice;
      $this->itBankAccount1 = $itBankAccount1;
      $this->itBankAccount2 = $itBankAccount2;
      $this->itStartingQuantity = $itStartingQuantity;
      $this->itIsForGuests = $itIsForGuests;
      $this->itHasProduct = $itHasProduct;
      $this->itOrderFulfillmentTime = $itOrderFulfillmentTime;
      $this->itEndingInfo = $itEndingInfo;
      $this->itIsAllegroStandard = $itIsAllegroStandard;
      $this->itIsNewUsed = $itIsNewUsed;
    }

    /**
     * @return int
     */
    public function getItId()
    {
      return $this->itId;
    }

    /**
     * @param int $itId
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItId($itId)
    {
      $this->itId = $itId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItCountry()
    {
      return $this->itCountry;
    }

    /**
     * @param int $itCountry
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItCountry($itCountry)
    {
      $this->itCountry = $itCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getItName()
    {
      return $this->itName;
    }

    /**
     * @param string $itName
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItName($itName)
    {
      $this->itName = $itName;
      return $this;
    }

    /**
     * @return float
     */
    public function getItPrice()
    {
      return $this->itPrice;
    }

    /**
     * @param float $itPrice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItPrice($itPrice)
    {
      $this->itPrice = $itPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItBidCount()
    {
      return $this->itBidCount;
    }

    /**
     * @param int $itBidCount
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItBidCount($itBidCount)
    {
      $this->itBidCount = $itBidCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItEndingTime()
    {
      return $this->itEndingTime;
    }

    /**
     * @param int $itEndingTime
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItEndingTime($itEndingTime)
    {
      $this->itEndingTime = $itEndingTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getItSellerId()
    {
      return $this->itSellerId;
    }

    /**
     * @param int $itSellerId
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItSellerId($itSellerId)
    {
      $this->itSellerId = $itSellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItSellerLogin()
    {
      return $this->itSellerLogin;
    }

    /**
     * @param string $itSellerLogin
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItSellerLogin($itSellerLogin)
    {
      $this->itSellerLogin = $itSellerLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getItSellerRating()
    {
      return $this->itSellerRating;
    }

    /**
     * @param int $itSellerRating
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItSellerRating($itSellerRating)
    {
      $this->itSellerRating = $itSellerRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getItStartingTime()
    {
      return $this->itStartingTime;
    }

    /**
     * @param int $itStartingTime
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItStartingTime($itStartingTime)
    {
      $this->itStartingTime = $itStartingTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getItStartingPrice()
    {
      return $this->itStartingPrice;
    }

    /**
     * @param float $itStartingPrice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItStartingPrice($itStartingPrice)
    {
      $this->itStartingPrice = $itStartingPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItQuantity()
    {
      return $this->itQuantity;
    }

    /**
     * @param int $itQuantity
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItQuantity($itQuantity)
    {
      $this->itQuantity = $itQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getItFotoCount()
    {
      return $this->itFotoCount;
    }

    /**
     * @param int $itFotoCount
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItFotoCount($itFotoCount)
    {
      $this->itFotoCount = $itFotoCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getItReservePrice()
    {
      return $this->itReservePrice;
    }

    /**
     * @param float $itReservePrice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItReservePrice($itReservePrice)
    {
      $this->itReservePrice = $itReservePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getItLocation()
    {
      return $this->itLocation;
    }

    /**
     * @param string $itLocation
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItLocation($itLocation)
    {
      $this->itLocation = $itLocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getItBuyNowPrice()
    {
      return $this->itBuyNowPrice;
    }

    /**
     * @param float $itBuyNowPrice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItBuyNowPrice($itBuyNowPrice)
    {
      $this->itBuyNowPrice = $itBuyNowPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItBuyNowActive()
    {
      return $this->itBuyNowActive;
    }

    /**
     * @param int $itBuyNowActive
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItBuyNowActive($itBuyNowActive)
    {
      $this->itBuyNowActive = $itBuyNowActive;
      return $this;
    }

    /**
     * @return float
     */
    public function getItAdvertisementPrice()
    {
      return $this->itAdvertisementPrice;
    }

    /**
     * @param float $itAdvertisementPrice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItAdvertisementPrice($itAdvertisementPrice)
    {
      $this->itAdvertisementPrice = $itAdvertisementPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItAdvertisementActive()
    {
      return $this->itAdvertisementActive;
    }

    /**
     * @param int $itAdvertisementActive
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItAdvertisementActive($itAdvertisementActive)
    {
      $this->itAdvertisementActive = $itAdvertisementActive;
      return $this;
    }

    /**
     * @return int
     */
    public function getItHighBidder()
    {
      return $this->itHighBidder;
    }

    /**
     * @param int $itHighBidder
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItHighBidder($itHighBidder)
    {
      $this->itHighBidder = $itHighBidder;
      return $this;
    }

    /**
     * @return string
     */
    public function getItHighBidderLogin()
    {
      return $this->itHighBidderLogin;
    }

    /**
     * @param string $itHighBidderLogin
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItHighBidderLogin($itHighBidderLogin)
    {
      $this->itHighBidderLogin = $itHighBidderLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getItDescription()
    {
      return $this->itDescription;
    }

    /**
     * @param string $itDescription
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItDescription($itDescription)
    {
      $this->itDescription = $itDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getItStandardizedDescription()
    {
      return $this->itStandardizedDescription;
    }

    /**
     * @param string $itStandardizedDescription
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItStandardizedDescription($itStandardizedDescription)
    {
      $this->itStandardizedDescription = $itStandardizedDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getItOptions()
    {
      return $this->itOptions;
    }

    /**
     * @param int $itOptions
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItOptions($itOptions)
    {
      $this->itOptions = $itOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getItState()
    {
      return $this->itState;
    }

    /**
     * @param int $itState
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItState($itState)
    {
      $this->itState = $itState;
      return $this;
    }

    /**
     * @return float
     */
    public function getItWireTransfer()
    {
      return $this->itWireTransfer;
    }

    /**
     * @param float $itWireTransfer
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItWireTransfer($itWireTransfer)
    {
      $this->itWireTransfer = $itWireTransfer;
      return $this;
    }

    /**
     * @return float
     */
    public function getItPostDelivery()
    {
      return $this->itPostDelivery;
    }

    /**
     * @param float $itPostDelivery
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItPostDelivery($itPostDelivery)
    {
      $this->itPostDelivery = $itPostDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getItPostInfo()
    {
      return $this->itPostInfo;
    }

    /**
     * @param string $itPostInfo
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItPostInfo($itPostInfo)
    {
      $this->itPostInfo = $itPostInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItQuantityType()
    {
      return $this->itQuantityType;
    }

    /**
     * @param int $itQuantityType
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItQuantityType($itQuantityType)
    {
      $this->itQuantityType = $itQuantityType;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsEco()
    {
      return $this->itIsEco;
    }

    /**
     * @param int $itIsEco
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItIsEco($itIsEco)
    {
      $this->itIsEco = $itIsEco;
      return $this;
    }

    /**
     * @return int
     */
    public function getItHitCount()
    {
      return $this->itHitCount;
    }

    /**
     * @param int $itHitCount
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItHitCount($itHitCount)
    {
      $this->itHitCount = $itHitCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getItPostcode()
    {
      return $this->itPostcode;
    }

    /**
     * @param string $itPostcode
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItPostcode($itPostcode)
    {
      $this->itPostcode = $itPostcode;
      return $this;
    }

    /**
     * @return int
     */
    public function getItVatInvoice()
    {
      return $this->itVatInvoice;
    }

    /**
     * @param int $itVatInvoice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItVatInvoice($itVatInvoice)
    {
      $this->itVatInvoice = $itVatInvoice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItVatMarginInvoice()
    {
      return $this->itVatMarginInvoice;
    }

    /**
     * @param int $itVatMarginInvoice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItVatMarginInvoice($itVatMarginInvoice)
    {
      $this->itVatMarginInvoice = $itVatMarginInvoice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItWithoutVatInvoice()
    {
      return $this->itWithoutVatInvoice;
    }

    /**
     * @param int $itWithoutVatInvoice
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItWithoutVatInvoice($itWithoutVatInvoice)
    {
      $this->itWithoutVatInvoice = $itWithoutVatInvoice;
      return $this;
    }

    /**
     * @return string
     */
    public function getItBankAccount1()
    {
      return $this->itBankAccount1;
    }

    /**
     * @param string $itBankAccount1
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItBankAccount1($itBankAccount1)
    {
      $this->itBankAccount1 = $itBankAccount1;
      return $this;
    }

    /**
     * @return string
     */
    public function getItBankAccount2()
    {
      return $this->itBankAccount2;
    }

    /**
     * @param string $itBankAccount2
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItBankAccount2($itBankAccount2)
    {
      $this->itBankAccount2 = $itBankAccount2;
      return $this;
    }

    /**
     * @return int
     */
    public function getItStartingQuantity()
    {
      return $this->itStartingQuantity;
    }

    /**
     * @param int $itStartingQuantity
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItStartingQuantity($itStartingQuantity)
    {
      $this->itStartingQuantity = $itStartingQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsForGuests()
    {
      return $this->itIsForGuests;
    }

    /**
     * @param int $itIsForGuests
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItIsForGuests($itIsForGuests)
    {
      $this->itIsForGuests = $itIsForGuests;
      return $this;
    }

    /**
     * @return int
     */
    public function getItHasProduct()
    {
      return $this->itHasProduct;
    }

    /**
     * @param int $itHasProduct
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItHasProduct($itHasProduct)
    {
      $this->itHasProduct = $itHasProduct;
      return $this;
    }

    /**
     * @return int
     */
    public function getItOrderFulfillmentTime()
    {
      return $this->itOrderFulfillmentTime;
    }

    /**
     * @param int $itOrderFulfillmentTime
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItOrderFulfillmentTime($itOrderFulfillmentTime)
    {
      $this->itOrderFulfillmentTime = $itOrderFulfillmentTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getItEndingInfo()
    {
      return $this->itEndingInfo;
    }

    /**
     * @param int $itEndingInfo
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItEndingInfo($itEndingInfo)
    {
      $this->itEndingInfo = $itEndingInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsAllegroStandard()
    {
      return $this->itIsAllegroStandard;
    }

    /**
     * @param int $itIsAllegroStandard
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItIsAllegroStandard($itIsAllegroStandard)
    {
      $this->itIsAllegroStandard = $itIsAllegroStandard;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsNewUsed()
    {
      return $this->itIsNewUsed;
    }

    /**
     * @param int $itIsNewUsed
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItIsNewUsed($itIsNewUsed)
    {
      $this->itIsNewUsed = $itIsNewUsed;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsBrandZone()
    {
      return $this->itIsBrandZone;
    }

    /**
     * @param int $itIsBrandZone
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItIsBrandZone($itIsBrandZone)
    {
      $this->itIsBrandZone = $itIsBrandZone;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsFulfillmentTimeActive()
    {
      return $this->itIsFulfillmentTimeActive;
    }

    /**
     * @param int $itIsFulfillmentTimeActive
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItIsFulfillmentTimeActive($itIsFulfillmentTimeActive)
    {
      $this->itIsFulfillmentTimeActive = $itIsFulfillmentTimeActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getItEan()
    {
      return $this->itEan;
    }

    /**
     * @param string $itEan
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItEan($itEan)
    {
      $this->itEan = $itEan;
      return $this;
    }

    /**
     * @return string
     */
    public function getItContact()
    {
      return $this->itContact;
    }

    /**
     * @param string $itContact
     * @return \bbcreation\AllegroApi\ItemInfoExt
     */
    public function setItContact($itContact)
    {
      $this->itContact = $itContact;
      return $this;
    }

}
