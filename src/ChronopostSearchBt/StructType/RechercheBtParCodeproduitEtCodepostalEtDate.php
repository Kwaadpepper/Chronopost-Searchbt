<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheBtParCodeproduitEtCodepostalEtDate StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheBtParCodeproduitEtCodepostalEtDate
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheBtParCodeproduitEtCodepostalEtDate extends AbstractStructBase
{
    /**
     * The codeProduit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeProduit = null;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codePostal = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * Constructor method for rechercheBtParCodeproduitEtCodepostalEtDate
     * @uses RechercheBtParCodeproduitEtCodepostalEtDate::setCodeProduit()
     * @uses RechercheBtParCodeproduitEtCodepostalEtDate::setCodePostal()
     * @uses RechercheBtParCodeproduitEtCodepostalEtDate::setDate()
     * @param string $codeProduit
     * @param string $codePostal
     * @param string $date
     */
    public function __construct(?string $codeProduit = null, ?string $codePostal = null, ?string $date = null)
    {
        $this
            ->setCodeProduit($codeProduit)
            ->setCodePostal($codePostal)
            ->setDate($date);
    }
    /**
     * Get codeProduit value
     * @return string|null
     */
    public function getCodeProduit(): ?string
    {
        return $this->codeProduit;
    }
    /**
     * Set codeProduit value
     * @param string $codeProduit
     * @return \ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDate
     */
    public function setCodeProduit(?string $codeProduit = null): self
    {
        // validation for constraint: string
        if (!is_null($codeProduit) && !is_string($codeProduit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeProduit, true), gettype($codeProduit)), __LINE__);
        }
        $this->codeProduit = $codeProduit;
        
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
     * @return \ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDate
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDate
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
}
