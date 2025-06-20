<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeParTypeTourneeEtPosteComptable StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeParTypeTourneeEtPosteComptable
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheTourneeParTypeTourneeEtPosteComptable extends AbstractStructBase
{
    /**
     * The codeTournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeTournee = null;
    /**
     * The typeTournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeTournee = null;
    /**
     * The posteComptable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $posteComptable = null;
    /**
     * Constructor method for rechercheTourneeParTypeTourneeEtPosteComptable
     * @uses RechercheTourneeParTypeTourneeEtPosteComptable::setCodeTournee()
     * @uses RechercheTourneeParTypeTourneeEtPosteComptable::setTypeTournee()
     * @uses RechercheTourneeParTypeTourneeEtPosteComptable::setPosteComptable()
     * @param string $codeTournee
     * @param string $typeTournee
     * @param string $posteComptable
     */
    public function __construct(?string $codeTournee = null, ?string $typeTournee = null, ?string $posteComptable = null)
    {
        $this
            ->setCodeTournee($codeTournee)
            ->setTypeTournee($typeTournee)
            ->setPosteComptable($posteComptable);
    }
    /**
     * Get codeTournee value
     * @return string|null
     */
    public function getCodeTournee(): ?string
    {
        return $this->codeTournee;
    }
    /**
     * Set codeTournee value
     * @param string $codeTournee
     * @return \ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptable
     */
    public function setCodeTournee(?string $codeTournee = null): self
    {
        // validation for constraint: string
        if (!is_null($codeTournee) && !is_string($codeTournee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeTournee, true), gettype($codeTournee)), __LINE__);
        }
        $this->codeTournee = $codeTournee;
        
        return $this;
    }
    /**
     * Get typeTournee value
     * @return string|null
     */
    public function getTypeTournee(): ?string
    {
        return $this->typeTournee;
    }
    /**
     * Set typeTournee value
     * @param string $typeTournee
     * @return \ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptable
     */
    public function setTypeTournee(?string $typeTournee = null): self
    {
        // validation for constraint: string
        if (!is_null($typeTournee) && !is_string($typeTournee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeTournee, true), gettype($typeTournee)), __LINE__);
        }
        $this->typeTournee = $typeTournee;
        
        return $this;
    }
    /**
     * Get posteComptable value
     * @return string|null
     */
    public function getPosteComptable(): ?string
    {
        return $this->posteComptable;
    }
    /**
     * Set posteComptable value
     * @param string $posteComptable
     * @return \ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptable
     */
    public function setPosteComptable(?string $posteComptable = null): self
    {
        // validation for constraint: string
        if (!is_null($posteComptable) && !is_string($posteComptable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posteComptable, true), gettype($posteComptable)), __LINE__);
        }
        $this->posteComptable = $posteComptable;
        
        return $this;
    }
}
