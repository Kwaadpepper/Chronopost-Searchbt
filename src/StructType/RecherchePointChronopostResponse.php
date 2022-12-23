<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointChronopostResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostResponse
 * @subpackage Structs
 */
class RecherchePointChronopostResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PointCHRResult|null
     */
    protected ?\StructType\PointCHRResult $return = null;
    /**
     * Constructor method for recherchePointChronopostResponse
     * @uses RecherchePointChronopostResponse::setReturn()
     * @param \StructType\PointCHRResult $return
     */
    public function __construct(?\StructType\PointCHRResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\PointCHRResult|null
     */
    public function getReturn(): ?\StructType\PointCHRResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\PointCHRResult $return
     * @return \StructType\RecherchePointChronopostResponse
     */
    public function setReturn(?\StructType\PointCHRResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
