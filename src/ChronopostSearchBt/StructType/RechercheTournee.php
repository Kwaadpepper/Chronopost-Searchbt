<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTournee StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTournee
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheTournee extends AbstractStructBase
{
    /**
     * The codeTournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codeTournee = null;
    /**
     * Constructor method for rechercheTournee
     * @uses RechercheTournee::setCodeTournee()
     * @param string $codeTournee
     */
    public function __construct(?string $codeTournee = null)
    {
        $this
            ->setCodeTournee($codeTournee);
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
     * @return \ChronopostSearchBt\StructType\RechercheTournee
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
}
