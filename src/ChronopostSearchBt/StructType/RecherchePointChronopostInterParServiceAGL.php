<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointChronopostInterParServiceAGL StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostInterParServiceAGL
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecherchePointChronopostInterParServiceAGL extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * The maxPointChronopost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxPointChronopost = null;
    /**
     * The maxDistanceSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxDistanceSearch = null;
    /**
     * The holidayTolerant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $holidayTolerant = null;
    /**
     * The serviceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceList = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The amaGeoLoc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $amaGeoLoc = null;
    /**
     * Constructor method for recherchePointChronopostInterParServiceAGL
     * @uses RecherchePointChronopostInterParServiceAGL::setAccountNumber()
     * @uses RecherchePointChronopostInterParServiceAGL::setPassword()
     * @uses RecherchePointChronopostInterParServiceAGL::setAddress()
     * @uses RecherchePointChronopostInterParServiceAGL::setZipCode()
     * @uses RecherchePointChronopostInterParServiceAGL::setCity()
     * @uses RecherchePointChronopostInterParServiceAGL::setCountryCode()
     * @uses RecherchePointChronopostInterParServiceAGL::setType()
     * @uses RecherchePointChronopostInterParServiceAGL::setProductCode()
     * @uses RecherchePointChronopostInterParServiceAGL::setService()
     * @uses RecherchePointChronopostInterParServiceAGL::setWeight()
     * @uses RecherchePointChronopostInterParServiceAGL::setShippingDate()
     * @uses RecherchePointChronopostInterParServiceAGL::setMaxPointChronopost()
     * @uses RecherchePointChronopostInterParServiceAGL::setMaxDistanceSearch()
     * @uses RecherchePointChronopostInterParServiceAGL::setHolidayTolerant()
     * @uses RecherchePointChronopostInterParServiceAGL::setServiceList()
     * @uses RecherchePointChronopostInterParServiceAGL::setLanguage()
     * @uses RecherchePointChronopostInterParServiceAGL::setVersion()
     * @uses RecherchePointChronopostInterParServiceAGL::setAmaGeoLoc()
     * @param string $accountNumber
     * @param string $password
     * @param string $address
     * @param string $zipCode
     * @param string $city
     * @param string $countryCode
     * @param string $type
     * @param string $productCode
     * @param string $service
     * @param string $weight
     * @param string $shippingDate
     * @param string $maxPointChronopost
     * @param string $maxDistanceSearch
     * @param string $holidayTolerant
     * @param string $serviceList
     * @param string $language
     * @param string $version
     * @param string $amaGeoLoc
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $address = null, ?string $zipCode = null, ?string $city = null, ?string $countryCode = null, ?string $type = null, ?string $productCode = null, ?string $service = null, ?string $weight = null, ?string $shippingDate = null, ?string $maxPointChronopost = null, ?string $maxDistanceSearch = null, ?string $holidayTolerant = null, ?string $serviceList = null, ?string $language = null, ?string $version = null, ?string $amaGeoLoc = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setAddress($address)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setType($type)
            ->setProductCode($productCode)
            ->setService($service)
            ->setWeight($weight)
            ->setShippingDate($shippingDate)
            ->setMaxPointChronopost($maxPointChronopost)
            ->setMaxDistanceSearch($maxDistanceSearch)
            ->setHolidayTolerant($holidayTolerant)
            ->setServiceList($serviceList)
            ->setLanguage($language)
            ->setVersion($version)
            ->setAmaGeoLoc($amaGeoLoc);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        
        return $this;
    }
    /**
     * Get maxPointChronopost value
     * @return string|null
     */
    public function getMaxPointChronopost(): ?string
    {
        return $this->maxPointChronopost;
    }
    /**
     * Set maxPointChronopost value
     * @param string $maxPointChronopost
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setMaxPointChronopost(?string $maxPointChronopost = null): self
    {
        // validation for constraint: string
        if (!is_null($maxPointChronopost) && !is_string($maxPointChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxPointChronopost, true), gettype($maxPointChronopost)), __LINE__);
        }
        $this->maxPointChronopost = $maxPointChronopost;
        
        return $this;
    }
    /**
     * Get maxDistanceSearch value
     * @return string|null
     */
    public function getMaxDistanceSearch(): ?string
    {
        return $this->maxDistanceSearch;
    }
    /**
     * Set maxDistanceSearch value
     * @param string $maxDistanceSearch
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setMaxDistanceSearch(?string $maxDistanceSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($maxDistanceSearch) && !is_string($maxDistanceSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxDistanceSearch, true), gettype($maxDistanceSearch)), __LINE__);
        }
        $this->maxDistanceSearch = $maxDistanceSearch;
        
        return $this;
    }
    /**
     * Get holidayTolerant value
     * @return string|null
     */
    public function getHolidayTolerant(): ?string
    {
        return $this->holidayTolerant;
    }
    /**
     * Set holidayTolerant value
     * @param string $holidayTolerant
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setHolidayTolerant(?string $holidayTolerant = null): self
    {
        // validation for constraint: string
        if (!is_null($holidayTolerant) && !is_string($holidayTolerant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holidayTolerant, true), gettype($holidayTolerant)), __LINE__);
        }
        $this->holidayTolerant = $holidayTolerant;
        
        return $this;
    }
    /**
     * Get serviceList value
     * @return string|null
     */
    public function getServiceList(): ?string
    {
        return $this->serviceList;
    }
    /**
     * Set serviceList value
     * @param string $serviceList
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setServiceList(?string $serviceList = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceList) && !is_string($serviceList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceList, true), gettype($serviceList)), __LINE__);
        }
        $this->serviceList = $serviceList;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get amaGeoLoc value
     * @return string|null
     */
    public function getAmaGeoLoc(): ?string
    {
        return $this->amaGeoLoc;
    }
    /**
     * Set amaGeoLoc value
     * @param string $amaGeoLoc
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL
     */
    public function setAmaGeoLoc(?string $amaGeoLoc = null): self
    {
        // validation for constraint: string
        if (!is_null($amaGeoLoc) && !is_string($amaGeoLoc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amaGeoLoc, true), gettype($amaGeoLoc)), __LINE__);
        }
        $this->amaGeoLoc = $amaGeoLoc;
        
        return $this;
    }
}
