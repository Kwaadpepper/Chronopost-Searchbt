<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheBtParCodeproduitEtCodepostalEtDateResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheBtParCodeproduitEtCodepostalEtDateResponse
 * @subpackage Structs
 */
class RechercheBtParCodeproduitEtCodepostalEtDateResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BureauDeTabacAvecCoord[]
     */
    protected ?array $return = null;
    /**
     * Constructor method for rechercheBtParCodeproduitEtCodepostalEtDateResponse
     * @uses RechercheBtParCodeproduitEtCodepostalEtDateResponse::setReturn()
     * @param \StructType\BureauDeTabacAvecCoord[] $return
     */
    public function __construct(?array $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\BureauDeTabacAvecCoord[]
     */
    public function getReturn(): ?array
    {
        return $this->return;
    }
    /**
     * This method is responsible for validating the values passed to the setReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnForArrayConstraintsFromSetReturn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rechercheBtParCodeproduitEtCodepostalEtDateResponseReturnItem) {
            // validation for constraint: itemType
            if (!$rechercheBtParCodeproduitEtCodepostalEtDateResponseReturnItem instanceof \StructType\BureauDeTabacAvecCoord) {
                $invalidValues[] = is_object($rechercheBtParCodeproduitEtCodepostalEtDateResponseReturnItem) ? get_class($rechercheBtParCodeproduitEtCodepostalEtDateResponseReturnItem) : sprintf('%s(%s)', gettype($rechercheBtParCodeproduitEtCodepostalEtDateResponseReturnItem), var_export($rechercheBtParCodeproduitEtCodepostalEtDateResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \StructType\BureauDeTabacAvecCoord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set return value
     * @throws InvalidArgumentException
     * @param \StructType\BureauDeTabacAvecCoord[] $return
     * @return \StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse
     */
    public function setReturn(?array $return = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnArrayErrorMessage = self::validateReturnForArrayConstraintsFromSetReturn($return))) {
            throw new InvalidArgumentException($returnArrayErrorMessage, __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
    /**
     * Add item to return value
     * @throws InvalidArgumentException
     * @param \StructType\BureauDeTabacAvecCoord $item
     * @return \StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse
     */
    public function addToReturn(\StructType\BureauDeTabacAvecCoord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BureauDeTabacAvecCoord) {
            throw new InvalidArgumentException(sprintf('The return property can only contain items of type \StructType\BureauDeTabacAvecCoord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        
        return $this;
    }
}
