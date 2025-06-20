<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for horaireOuverture StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HoraireOuverture extends AbstractStructBase
{
    /**
     * The debut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debut = null;
    /**
     * The fin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fin = null;
    /**
     * Constructor method for horaireOuverture
     * @uses HoraireOuverture::setDebut()
     * @uses HoraireOuverture::setFin()
     * @param string $debut
     * @param string $fin
     */
    public function __construct(?string $debut = null, ?string $fin = null)
    {
        $this
            ->setDebut($debut)
            ->setFin($fin);
    }
    /**
     * Get debut value
     * @return string|null
     */
    public function getDebut(): ?string
    {
        return $this->debut;
    }
    /**
     * Set debut value
     * @param string $debut
     * @return \ChronopostSearchBt\StructType\HoraireOuverture
     */
    public function setDebut(?string $debut = null): self
    {
        // validation for constraint: string
        if (!is_null($debut) && !is_string($debut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debut, true), gettype($debut)), __LINE__);
        }
        $this->debut = $debut;
        
        return $this;
    }
    /**
     * Get fin value
     * @return string|null
     */
    public function getFin(): ?string
    {
        return $this->fin;
    }
    /**
     * Set fin value
     * @param string $fin
     * @return \ChronopostSearchBt\StructType\HoraireOuverture
     */
    public function setFin(?string $fin = null): self
    {
        // validation for constraint: string
        if (!is_null($fin) && !is_string($fin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fin, true), gettype($fin)), __LINE__);
        }
        $this->fin = $fin;
        
        return $this;
    }
}
