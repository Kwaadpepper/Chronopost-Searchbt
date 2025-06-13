<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointCHR StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointCHR extends AbstractStructBase
{
    /**
     * The accesPersonneMobiliteReduite
     * @var bool|null
     */
    protected ?bool $accesPersonneMobiliteReduite = null;
    /**
     * The actif
     * @var bool|null
     */
    protected ?bool $actif = null;
    /**
     * The adresse1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse1 = null;
    /**
     * The adresse2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse2 = null;
    /**
     * The adresse3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $adresse3 = null;
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePays = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePostal = null;
    /**
     * The coordGeolocalisationLatitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coordGeolocalisationLatitude = null;
    /**
     * The coordGeolocalisationLongitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coordGeolocalisationLongitude = null;
    /**
     * The distanceEnMetre
     * @var int|null
     */
    protected ?int $distanceEnMetre = null;
    /**
     * The identifiant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifiant = null;
    /**
     * The indiceDeLocalisation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $indiceDeLocalisation = null;
    /**
     * The localite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $localite = null;
    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nom = null;
    /**
     * The poidsMaxi
     * @var int|null
     */
    protected ?int $poidsMaxi = null;
    /**
     * The typeDePoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeDePoint = null;
    /**
     * The urlGoogleMaps
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $urlGoogleMaps = null;
    /**
     * The listeHoraireOuverture
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour[]
     */
    protected ?array $listeHoraireOuverture = null;
    /**
     * The listePeriodeFermeture
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostSearchBt\StructType\PeriodeFermeture[]
     */
    protected ?array $listePeriodeFermeture = null;
    /**
     * Constructor method for pointCHR
     * @uses PointCHR::setAccesPersonneMobiliteReduite()
     * @uses PointCHR::setActif()
     * @uses PointCHR::setAdresse1()
     * @uses PointCHR::setAdresse2()
     * @uses PointCHR::setAdresse3()
     * @uses PointCHR::setCodePays()
     * @uses PointCHR::setCodePostal()
     * @uses PointCHR::setCoordGeolocalisationLatitude()
     * @uses PointCHR::setCoordGeolocalisationLongitude()
     * @uses PointCHR::setDistanceEnMetre()
     * @uses PointCHR::setIdentifiant()
     * @uses PointCHR::setIndiceDeLocalisation()
     * @uses PointCHR::setLocalite()
     * @uses PointCHR::setNom()
     * @uses PointCHR::setPoidsMaxi()
     * @uses PointCHR::setTypeDePoint()
     * @uses PointCHR::setUrlGoogleMaps()
     * @uses PointCHR::setListeHoraireOuverture()
     * @uses PointCHR::setListePeriodeFermeture()
     * @param bool $accesPersonneMobiliteReduite
     * @param bool $actif
     * @param string $adresse1
     * @param string $adresse2
     * @param string $adresse3
     * @param string $codePays
     * @param string $codePostal
     * @param string $coordGeolocalisationLatitude
     * @param string $coordGeolocalisationLongitude
     * @param int $distanceEnMetre
     * @param string $identifiant
     * @param string $indiceDeLocalisation
     * @param string $localite
     * @param string $nom
     * @param int $poidsMaxi
     * @param string $typeDePoint
     * @param string $urlGoogleMaps
     * @param \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour[] $listeHoraireOuverture
     * @param \ChronopostSearchBt\StructType\PeriodeFermeture[] $listePeriodeFermeture
     */
    public function __construct(?bool $accesPersonneMobiliteReduite = null, ?bool $actif = null, ?string $adresse1 = null, ?string $adresse2 = null, ?string $adresse3 = null, ?string $codePays = null, ?string $codePostal = null, ?string $coordGeolocalisationLatitude = null, ?string $coordGeolocalisationLongitude = null, ?int $distanceEnMetre = null, ?string $identifiant = null, ?string $indiceDeLocalisation = null, ?string $localite = null, ?string $nom = null, ?int $poidsMaxi = null, ?string $typeDePoint = null, ?string $urlGoogleMaps = null, ?array $listeHoraireOuverture = null, ?array $listePeriodeFermeture = null)
    {
        $this
            ->setAccesPersonneMobiliteReduite($accesPersonneMobiliteReduite)
            ->setActif($actif)
            ->setAdresse1($adresse1)
            ->setAdresse2($adresse2)
            ->setAdresse3($adresse3)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setCoordGeolocalisationLatitude($coordGeolocalisationLatitude)
            ->setCoordGeolocalisationLongitude($coordGeolocalisationLongitude)
            ->setDistanceEnMetre($distanceEnMetre)
            ->setIdentifiant($identifiant)
            ->setIndiceDeLocalisation($indiceDeLocalisation)
            ->setLocalite($localite)
            ->setNom($nom)
            ->setPoidsMaxi($poidsMaxi)
            ->setTypeDePoint($typeDePoint)
            ->setUrlGoogleMaps($urlGoogleMaps)
            ->setListeHoraireOuverture($listeHoraireOuverture)
            ->setListePeriodeFermeture($listePeriodeFermeture);
    }
    /**
     * Get accesPersonneMobiliteReduite value
     * @return bool|null
     */
    public function getAccesPersonneMobiliteReduite(): ?bool
    {
        return $this->accesPersonneMobiliteReduite;
    }
    /**
     * Set accesPersonneMobiliteReduite value
     * @param bool $accesPersonneMobiliteReduite
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setAccesPersonneMobiliteReduite(?bool $accesPersonneMobiliteReduite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accesPersonneMobiliteReduite) && !is_bool($accesPersonneMobiliteReduite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accesPersonneMobiliteReduite, true), gettype($accesPersonneMobiliteReduite)), __LINE__);
        }
        $this->accesPersonneMobiliteReduite = $accesPersonneMobiliteReduite;
        
        return $this;
    }
    /**
     * Get actif value
     * @return bool|null
     */
    public function getActif(): ?bool
    {
        return $this->actif;
    }
    /**
     * Set actif value
     * @param bool $actif
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setActif(?bool $actif = null): self
    {
        // validation for constraint: boolean
        if (!is_null($actif) && !is_bool($actif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($actif, true), gettype($actif)), __LINE__);
        }
        $this->actif = $actif;
        
        return $this;
    }
    /**
     * Get adresse1 value
     * @return string|null
     */
    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }
    /**
     * Set adresse1 value
     * @param string $adresse1
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setAdresse1(?string $adresse1 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse1) && !is_string($adresse1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse1, true), gettype($adresse1)), __LINE__);
        }
        $this->adresse1 = $adresse1;
        
        return $this;
    }
    /**
     * Get adresse2 value
     * @return string|null
     */
    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }
    /**
     * Set adresse2 value
     * @param string $adresse2
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setAdresse2(?string $adresse2 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse2) && !is_string($adresse2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse2, true), gettype($adresse2)), __LINE__);
        }
        $this->adresse2 = $adresse2;
        
        return $this;
    }
    /**
     * Get adresse3 value
     * @return string|null
     */
    public function getAdresse3(): ?string
    {
        return $this->adresse3;
    }
    /**
     * Set adresse3 value
     * @param string $adresse3
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setAdresse3(?string $adresse3 = null): self
    {
        // validation for constraint: string
        if (!is_null($adresse3) && !is_string($adresse3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse3, true), gettype($adresse3)), __LINE__);
        }
        $this->adresse3 = $adresse3;
        
        return $this;
    }
    /**
     * Get codePays value
     * @return string|null
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }
    /**
     * Set codePays value
     * @param string $codePays
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setCodePays(?string $codePays = null): self
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePays, true), gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;
        
        return $this;
    }
    /**
     * Get codePostal value
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }
    /**
     * Set codePostal value
     * @param string $codePostal
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setCodePostal(?string $codePostal = null): self
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostal, true), gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;
        
        return $this;
    }
    /**
     * Get coordGeolocalisationLatitude value
     * @return string|null
     */
    public function getCoordGeolocalisationLatitude(): ?string
    {
        return $this->coordGeolocalisationLatitude;
    }
    /**
     * Set coordGeolocalisationLatitude value
     * @param string $coordGeolocalisationLatitude
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setCoordGeolocalisationLatitude(?string $coordGeolocalisationLatitude = null): self
    {
        // validation for constraint: string
        if (!is_null($coordGeolocalisationLatitude) && !is_string($coordGeolocalisationLatitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coordGeolocalisationLatitude, true), gettype($coordGeolocalisationLatitude)), __LINE__);
        }
        $this->coordGeolocalisationLatitude = $coordGeolocalisationLatitude;
        
        return $this;
    }
    /**
     * Get coordGeolocalisationLongitude value
     * @return string|null
     */
    public function getCoordGeolocalisationLongitude(): ?string
    {
        return $this->coordGeolocalisationLongitude;
    }
    /**
     * Set coordGeolocalisationLongitude value
     * @param string $coordGeolocalisationLongitude
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setCoordGeolocalisationLongitude(?string $coordGeolocalisationLongitude = null): self
    {
        // validation for constraint: string
        if (!is_null($coordGeolocalisationLongitude) && !is_string($coordGeolocalisationLongitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coordGeolocalisationLongitude, true), gettype($coordGeolocalisationLongitude)), __LINE__);
        }
        $this->coordGeolocalisationLongitude = $coordGeolocalisationLongitude;
        
        return $this;
    }
    /**
     * Get distanceEnMetre value
     * @return int|null
     */
    public function getDistanceEnMetre(): ?int
    {
        return $this->distanceEnMetre;
    }
    /**
     * Set distanceEnMetre value
     * @param int $distanceEnMetre
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setDistanceEnMetre(?int $distanceEnMetre = null): self
    {
        // validation for constraint: int
        if (!is_null($distanceEnMetre) && !(is_int($distanceEnMetre) || ctype_digit($distanceEnMetre))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distanceEnMetre, true), gettype($distanceEnMetre)), __LINE__);
        }
        $this->distanceEnMetre = $distanceEnMetre;
        
        return $this;
    }
    /**
     * Get identifiant value
     * @return string|null
     */
    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }
    /**
     * Set identifiant value
     * @param string $identifiant
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setIdentifiant(?string $identifiant = null): self
    {
        // validation for constraint: string
        if (!is_null($identifiant) && !is_string($identifiant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifiant, true), gettype($identifiant)), __LINE__);
        }
        $this->identifiant = $identifiant;
        
        return $this;
    }
    /**
     * Get indiceDeLocalisation value
     * @return string|null
     */
    public function getIndiceDeLocalisation(): ?string
    {
        return $this->indiceDeLocalisation;
    }
    /**
     * Set indiceDeLocalisation value
     * @param string $indiceDeLocalisation
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setIndiceDeLocalisation(?string $indiceDeLocalisation = null): self
    {
        // validation for constraint: string
        if (!is_null($indiceDeLocalisation) && !is_string($indiceDeLocalisation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indiceDeLocalisation, true), gettype($indiceDeLocalisation)), __LINE__);
        }
        $this->indiceDeLocalisation = $indiceDeLocalisation;
        
        return $this;
    }
    /**
     * Get localite value
     * @return string|null
     */
    public function getLocalite(): ?string
    {
        return $this->localite;
    }
    /**
     * Set localite value
     * @param string $localite
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setLocalite(?string $localite = null): self
    {
        // validation for constraint: string
        if (!is_null($localite) && !is_string($localite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localite, true), gettype($localite)), __LINE__);
        }
        $this->localite = $localite;
        
        return $this;
    }
    /**
     * Get nom value
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }
    /**
     * Set nom value
     * @param string $nom
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setNom(?string $nom = null): self
    {
        // validation for constraint: string
        if (!is_null($nom) && !is_string($nom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom, true), gettype($nom)), __LINE__);
        }
        $this->nom = $nom;
        
        return $this;
    }
    /**
     * Get poidsMaxi value
     * @return int|null
     */
    public function getPoidsMaxi(): ?int
    {
        return $this->poidsMaxi;
    }
    /**
     * Set poidsMaxi value
     * @param int $poidsMaxi
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setPoidsMaxi(?int $poidsMaxi = null): self
    {
        // validation for constraint: int
        if (!is_null($poidsMaxi) && !(is_int($poidsMaxi) || ctype_digit($poidsMaxi))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($poidsMaxi, true), gettype($poidsMaxi)), __LINE__);
        }
        $this->poidsMaxi = $poidsMaxi;
        
        return $this;
    }
    /**
     * Get typeDePoint value
     * @return string|null
     */
    public function getTypeDePoint(): ?string
    {
        return $this->typeDePoint;
    }
    /**
     * Set typeDePoint value
     * @param string $typeDePoint
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setTypeDePoint(?string $typeDePoint = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDePoint) && !is_string($typeDePoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDePoint, true), gettype($typeDePoint)), __LINE__);
        }
        $this->typeDePoint = $typeDePoint;
        
        return $this;
    }
    /**
     * Get urlGoogleMaps value
     * @return string|null
     */
    public function getUrlGoogleMaps(): ?string
    {
        return $this->urlGoogleMaps;
    }
    /**
     * Set urlGoogleMaps value
     * @param string $urlGoogleMaps
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setUrlGoogleMaps(?string $urlGoogleMaps = null): self
    {
        // validation for constraint: string
        if (!is_null($urlGoogleMaps) && !is_string($urlGoogleMaps)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlGoogleMaps, true), gettype($urlGoogleMaps)), __LINE__);
        }
        $this->urlGoogleMaps = $urlGoogleMaps;
        
        return $this;
    }
    /**
     * Get listeHoraireOuverture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour[]
     */
    public function getListeHoraireOuverture(): ?array
    {
        return $this->listeHoraireOuverture ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListeHoraireOuverture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListeHoraireOuverture method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListeHoraireOuvertureForArrayConstraintFromSetListeHoraireOuverture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pointCHRListeHoraireOuvertureItem) {
            // validation for constraint: itemType
            if (!$pointCHRListeHoraireOuvertureItem instanceof \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour) {
                $invalidValues[] = is_object($pointCHRListeHoraireOuvertureItem) ? get_class($pointCHRListeHoraireOuvertureItem) : sprintf('%s(%s)', gettype($pointCHRListeHoraireOuvertureItem), var_export($pointCHRListeHoraireOuvertureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listeHoraireOuverture property can only contain items of type \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listeHoraireOuverture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour[] $listeHoraireOuverture
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setListeHoraireOuverture(?array $listeHoraireOuverture = null): self
    {
        // validation for constraint: array
        if ('' !== ($listeHoraireOuvertureArrayErrorMessage = self::validateListeHoraireOuvertureForArrayConstraintFromSetListeHoraireOuverture($listeHoraireOuverture))) {
            throw new InvalidArgumentException($listeHoraireOuvertureArrayErrorMessage, __LINE__);
        }
        if (is_null($listeHoraireOuverture) || (is_array($listeHoraireOuverture) && empty($listeHoraireOuverture))) {
            unset($this->listeHoraireOuverture);
        } else {
            $this->listeHoraireOuverture = $listeHoraireOuverture;
        }
        
        return $this;
    }
    /**
     * Add item to listeHoraireOuverture value
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour $item
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function addToListeHoraireOuverture(\ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour) {
            throw new InvalidArgumentException(sprintf('The listeHoraireOuverture property can only contain items of type \ChronopostSearchBt\StructType\ListeHoraireOuverturePourUnJour, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listeHoraireOuverture[] = $item;
        
        return $this;
    }
    /**
     * Get listePeriodeFermeture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostSearchBt\StructType\PeriodeFermeture[]
     */
    public function getListePeriodeFermeture(): ?array
    {
        return $this->listePeriodeFermeture ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListePeriodeFermeture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListePeriodeFermeture method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListePeriodeFermetureForArrayConstraintFromSetListePeriodeFermeture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pointCHRListePeriodeFermetureItem) {
            // validation for constraint: itemType
            if (!$pointCHRListePeriodeFermetureItem instanceof \ChronopostSearchBt\StructType\PeriodeFermeture) {
                $invalidValues[] = is_object($pointCHRListePeriodeFermetureItem) ? get_class($pointCHRListePeriodeFermetureItem) : sprintf('%s(%s)', gettype($pointCHRListePeriodeFermetureItem), var_export($pointCHRListePeriodeFermetureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listePeriodeFermeture property can only contain items of type \ChronopostSearchBt\StructType\PeriodeFermeture, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listePeriodeFermeture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\PeriodeFermeture[] $listePeriodeFermeture
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function setListePeriodeFermeture(?array $listePeriodeFermeture = null): self
    {
        // validation for constraint: array
        if ('' !== ($listePeriodeFermetureArrayErrorMessage = self::validateListePeriodeFermetureForArrayConstraintFromSetListePeriodeFermeture($listePeriodeFermeture))) {
            throw new InvalidArgumentException($listePeriodeFermetureArrayErrorMessage, __LINE__);
        }
        if (is_null($listePeriodeFermeture) || (is_array($listePeriodeFermeture) && empty($listePeriodeFermeture))) {
            unset($this->listePeriodeFermeture);
        } else {
            $this->listePeriodeFermeture = $listePeriodeFermeture;
        }
        
        return $this;
    }
    /**
     * Add item to listePeriodeFermeture value
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\PeriodeFermeture $item
     * @return \ChronopostSearchBt\StructType\PointCHR
     */
    public function addToListePeriodeFermeture(\ChronopostSearchBt\StructType\PeriodeFermeture $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostSearchBt\StructType\PeriodeFermeture) {
            throw new InvalidArgumentException(sprintf('The listePeriodeFermeture property can only contain items of type \ChronopostSearchBt\StructType\PeriodeFermeture, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listePeriodeFermeture[] = $item;
        
        return $this;
    }
}
