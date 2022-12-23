<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * @subpackage Structs
 */
class RechercheTourneeParTypeTourneeEtPosteComptableResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TourneeCompleteResult|null
     */
    protected ?\StructType\TourneeCompleteResult $return = null;
    /**
     * Constructor method for rechercheTourneeParTypeTourneeEtPosteComptableResponse
     * @uses RechercheTourneeParTypeTourneeEtPosteComptableResponse::setReturn()
     * @param \StructType\TourneeCompleteResult $return
     */
    public function __construct(?\StructType\TourneeCompleteResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\TourneeCompleteResult|null
     */
    public function getReturn(): ?\StructType\TourneeCompleteResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\TourneeCompleteResult $return
     * @return \StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function setReturn(?\StructType\TourneeCompleteResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
