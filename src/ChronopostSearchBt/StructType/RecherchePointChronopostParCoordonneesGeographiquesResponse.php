<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * recherchePointChronopostParCoordonneesGeographiquesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostParCoordonneesGeographiquesResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecherchePointChronopostParCoordonneesGeographiquesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostSearchBt\StructType\PointCHRResult|null
     */
    protected ?\ChronopostSearchBt\StructType\PointCHRResult $return = null;
    /**
     * Constructor method for
     * recherchePointChronopostParCoordonneesGeographiquesResponse
     * @uses RecherchePointChronopostParCoordonneesGeographiquesResponse::setReturn()
     * @param \ChronopostSearchBt\StructType\PointCHRResult $return
     */
    public function __construct(?\ChronopostSearchBt\StructType\PointCHRResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostSearchBt\StructType\PointCHRResult|null
     */
    public function getReturn(): ?\ChronopostSearchBt\StructType\PointCHRResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostSearchBt\StructType\PointCHRResult $return
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse
     */
    public function setReturn(?\ChronopostSearchBt\StructType\PointCHRResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
