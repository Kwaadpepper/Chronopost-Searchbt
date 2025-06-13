<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheBtAvecPFParIdChronopostA2PasResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheBtAvecPFParIdChronopostA2PasResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheBtAvecPFParIdChronopostA2PasResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostSearchBt\StructType\BureauDeTabacAvecPF[]
     */
    protected ?array $return = null;
    /**
     * Constructor method for rechercheBtAvecPFParIdChronopostA2PasResponse
     * @uses RechercheBtAvecPFParIdChronopostA2PasResponse::setReturn()
     * @param \ChronopostSearchBt\StructType\BureauDeTabacAvecPF[] $return
     */
    public function __construct(?array $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostSearchBt\StructType\BureauDeTabacAvecPF[]
     */
    public function getReturn(): ?array
    {
        return $this->return;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturn method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnForArrayConstraintFromSetReturn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rechercheBtAvecPFParIdChronopostA2PasResponseReturnItem) {
            // validation for constraint: itemType
            if (!$rechercheBtAvecPFParIdChronopostA2PasResponseReturnItem instanceof \ChronopostSearchBt\StructType\BureauDeTabacAvecPF) {
                $invalidValues[] = is_object($rechercheBtAvecPFParIdChronopostA2PasResponseReturnItem) ? get_class($rechercheBtAvecPFParIdChronopostA2PasResponseReturnItem) : sprintf('%s(%s)', gettype($rechercheBtAvecPFParIdChronopostA2PasResponseReturnItem), var_export($rechercheBtAvecPFParIdChronopostA2PasResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \ChronopostSearchBt\StructType\BureauDeTabacAvecPF, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set return value
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\BureauDeTabacAvecPF[] $return
     * @return \ChronopostSearchBt\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse
     */
    public function setReturn(?array $return = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnArrayErrorMessage = self::validateReturnForArrayConstraintFromSetReturn($return))) {
            throw new InvalidArgumentException($returnArrayErrorMessage, __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
    /**
     * Add item to return value
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\BureauDeTabacAvecPF $item
     * @return \ChronopostSearchBt\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse
     */
    public function addToReturn(\ChronopostSearchBt\StructType\BureauDeTabacAvecPF $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostSearchBt\StructType\BureauDeTabacAvecPF) {
            throw new InvalidArgumentException(sprintf('The return property can only contain items of type \ChronopostSearchBt\StructType\BureauDeTabacAvecPF, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        
        return $this;
    }
}
