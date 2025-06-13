<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheTourneeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostSearchBt\StructType\TourneeResult|null
     */
    protected ?\ChronopostSearchBt\StructType\TourneeResult $return = null;
    /**
     * Constructor method for rechercheTourneeResponse
     * @uses RechercheTourneeResponse::setReturn()
     * @param \ChronopostSearchBt\StructType\TourneeResult $return
     */
    public function __construct(?\ChronopostSearchBt\StructType\TourneeResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostSearchBt\StructType\TourneeResult|null
     */
    public function getReturn(): ?\ChronopostSearchBt\StructType\TourneeResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostSearchBt\StructType\TourneeResult $return
     * @return \ChronopostSearchBt\StructType\RechercheTourneeResponse
     */
    public function setReturn(?\ChronopostSearchBt\StructType\TourneeResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
