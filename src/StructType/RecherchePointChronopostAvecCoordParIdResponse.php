<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointChronopostAvecCoordParIdResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostAvecCoordParIdResponse
 * @subpackage Structs
 */
class RecherchePointChronopostAvecCoordParIdResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PointChronopostAvecCoord[]
     */
    protected ?array $return = null;
    /**
     * Constructor method for recherchePointChronopostAvecCoordParIdResponse
     * @uses RecherchePointChronopostAvecCoordParIdResponse::setReturn()
     * @param \StructType\PointChronopostAvecCoord[] $return
     */
    public function __construct(?array $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\PointChronopostAvecCoord[]
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
        foreach ($values as $recherchePointChronopostAvecCoordParIdResponseReturnItem) {
            // validation for constraint: itemType
            if (!$recherchePointChronopostAvecCoordParIdResponseReturnItem instanceof \StructType\PointChronopostAvecCoord) {
                $invalidValues[] = is_object($recherchePointChronopostAvecCoordParIdResponseReturnItem) ? get_class($recherchePointChronopostAvecCoordParIdResponseReturnItem) : sprintf('%s(%s)', gettype($recherchePointChronopostAvecCoordParIdResponseReturnItem), var_export($recherchePointChronopostAvecCoordParIdResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \StructType\PointChronopostAvecCoord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set return value
     * @throws InvalidArgumentException
     * @param \StructType\PointChronopostAvecCoord[] $return
     * @return \StructType\RecherchePointChronopostAvecCoordParIdResponse
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
     * @param \StructType\PointChronopostAvecCoord $item
     * @return \StructType\RecherchePointChronopostAvecCoordParIdResponse
     */
    public function addToReturn(\StructType\PointChronopostAvecCoord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PointChronopostAvecCoord) {
            throw new InvalidArgumentException(sprintf('The return property can only contain items of type \StructType\PointChronopostAvecCoord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        
        return $this;
    }
}
