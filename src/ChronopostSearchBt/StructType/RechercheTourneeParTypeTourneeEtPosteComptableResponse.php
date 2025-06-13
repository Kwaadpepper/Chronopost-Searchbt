<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheTourneeParTypeTourneeEtPosteComptableResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostSearchBt\StructType\TourneeCompleteResult|null
     */
    protected ?\ChronopostSearchBt\StructType\TourneeCompleteResult $return = null;
    /**
     * Constructor method for rechercheTourneeParTypeTourneeEtPosteComptableResponse
     * @uses RechercheTourneeParTypeTourneeEtPosteComptableResponse::setReturn()
     * @param \ChronopostSearchBt\StructType\TourneeCompleteResult $return
     */
    public function __construct(?\ChronopostSearchBt\StructType\TourneeCompleteResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostSearchBt\StructType\TourneeCompleteResult|null
     */
    public function getReturn(): ?\ChronopostSearchBt\StructType\TourneeCompleteResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostSearchBt\StructType\TourneeCompleteResult $return
     * @return \ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function setReturn(?\ChronopostSearchBt\StructType\TourneeCompleteResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
