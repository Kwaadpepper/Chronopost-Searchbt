<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeResponse
 * @subpackage Structs
 */
class RechercheTourneeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TourneeResult|null
     */
    protected ?\StructType\TourneeResult $return = null;
    /**
     * Constructor method for rechercheTourneeResponse
     * @uses RechercheTourneeResponse::setReturn()
     * @param \StructType\TourneeResult $return
     */
    public function __construct(?\StructType\TourneeResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\TourneeResult|null
     */
    public function getReturn(): ?\StructType\TourneeResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\TourneeResult $return
     * @return \StructType\RechercheTourneeResponse
     */
    public function setReturn(?\StructType\TourneeResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
