<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllChronopostAgencesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAllChronopostAgencesResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllChronopostAgencesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ChronopostSearchBt\StructType\PointChronopost[]
     */
    protected ?array $return = null;
    /**
     * Constructor method for getAllChronopostAgencesResponse
     * @uses GetAllChronopostAgencesResponse::setReturn()
     * @param \ChronopostSearchBt\StructType\PointChronopost[] $return
     */
    public function __construct(?array $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostSearchBt\StructType\PointChronopost[]
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
        foreach ($values as $getAllChronopostAgencesResponseReturnItem) {
            // validation for constraint: itemType
            if (!$getAllChronopostAgencesResponseReturnItem instanceof \ChronopostSearchBt\StructType\PointChronopost) {
                $invalidValues[] = is_object($getAllChronopostAgencesResponseReturnItem) ? get_class($getAllChronopostAgencesResponseReturnItem) : sprintf('%s(%s)', gettype($getAllChronopostAgencesResponseReturnItem), var_export($getAllChronopostAgencesResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \ChronopostSearchBt\StructType\PointChronopost, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set return value
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\PointChronopost[] $return
     * @return \ChronopostSearchBt\StructType\GetAllChronopostAgencesResponse
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
     * @param \ChronopostSearchBt\StructType\PointChronopost $item
     * @return \ChronopostSearchBt\StructType\GetAllChronopostAgencesResponse
     */
    public function addToReturn(\ChronopostSearchBt\StructType\PointChronopost $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostSearchBt\StructType\PointChronopost) {
            throw new InvalidArgumentException(sprintf('The return property can only contain items of type \ChronopostSearchBt\StructType\PointChronopost, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        
        return $this;
    }
}
