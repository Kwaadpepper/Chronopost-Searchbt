<?php

declare(strict_types=1);

namespace ChronopostSearchBt\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointCHRResult StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointCHRResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The qualiteReponse
     * @var int|null
     */
    protected ?int $qualiteReponse = null;
    /**
     * The wsRequestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $wsRequestId = null;
    /**
     * The listePointRelais
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostSearchBt\StructType\PointCHR[]
     */
    protected ?array $listePointRelais = null;
    /**
     * Constructor method for pointCHRResult
     * @uses PointCHRResult::setErrorCode()
     * @uses PointCHRResult::setErrorMessage()
     * @uses PointCHRResult::setQualiteReponse()
     * @uses PointCHRResult::setWsRequestId()
     * @uses PointCHRResult::setListePointRelais()
     * @param int $errorCode
     * @param string $errorMessage
     * @param int $qualiteReponse
     * @param string $wsRequestId
     * @param \ChronopostSearchBt\StructType\PointCHR[] $listePointRelais
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?int $qualiteReponse = null, ?string $wsRequestId = null, ?array $listePointRelais = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setQualiteReponse($qualiteReponse)
            ->setWsRequestId($wsRequestId)
            ->setListePointRelais($listePointRelais);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ChronopostSearchBt\StructType\PointCHRResult
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ChronopostSearchBt\StructType\PointCHRResult
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get qualiteReponse value
     * @return int|null
     */
    public function getQualiteReponse(): ?int
    {
        return $this->qualiteReponse;
    }
    /**
     * Set qualiteReponse value
     * @param int $qualiteReponse
     * @return \ChronopostSearchBt\StructType\PointCHRResult
     */
    public function setQualiteReponse(?int $qualiteReponse = null): self
    {
        // validation for constraint: int
        if (!is_null($qualiteReponse) && !(is_int($qualiteReponse) || ctype_digit($qualiteReponse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualiteReponse, true), gettype($qualiteReponse)), __LINE__);
        }
        $this->qualiteReponse = $qualiteReponse;
        
        return $this;
    }
    /**
     * Get wsRequestId value
     * @return string|null
     */
    public function getWsRequestId(): ?string
    {
        return $this->wsRequestId;
    }
    /**
     * Set wsRequestId value
     * @param string $wsRequestId
     * @return \ChronopostSearchBt\StructType\PointCHRResult
     */
    public function setWsRequestId(?string $wsRequestId = null): self
    {
        // validation for constraint: string
        if (!is_null($wsRequestId) && !is_string($wsRequestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsRequestId, true), gettype($wsRequestId)), __LINE__);
        }
        $this->wsRequestId = $wsRequestId;
        
        return $this;
    }
    /**
     * Get listePointRelais value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostSearchBt\StructType\PointCHR[]
     */
    public function getListePointRelais(): ?array
    {
        return $this->listePointRelais ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListePointRelais method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListePointRelais method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListePointRelaisForArrayConstraintFromSetListePointRelais(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pointCHRResultListePointRelaisItem) {
            // validation for constraint: itemType
            if (!$pointCHRResultListePointRelaisItem instanceof \ChronopostSearchBt\StructType\PointCHR) {
                $invalidValues[] = is_object($pointCHRResultListePointRelaisItem) ? get_class($pointCHRResultListePointRelaisItem) : sprintf('%s(%s)', gettype($pointCHRResultListePointRelaisItem), var_export($pointCHRResultListePointRelaisItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listePointRelais property can only contain items of type \ChronopostSearchBt\StructType\PointCHR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listePointRelais value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\PointCHR[] $listePointRelais
     * @return \ChronopostSearchBt\StructType\PointCHRResult
     */
    public function setListePointRelais(?array $listePointRelais = null): self
    {
        // validation for constraint: array
        if ('' !== ($listePointRelaisArrayErrorMessage = self::validateListePointRelaisForArrayConstraintFromSetListePointRelais($listePointRelais))) {
            throw new InvalidArgumentException($listePointRelaisArrayErrorMessage, __LINE__);
        }
        if (is_null($listePointRelais) || (is_array($listePointRelais) && empty($listePointRelais))) {
            unset($this->listePointRelais);
        } else {
            $this->listePointRelais = $listePointRelais;
        }
        
        return $this;
    }
    /**
     * Add item to listePointRelais value
     * @throws InvalidArgumentException
     * @param \ChronopostSearchBt\StructType\PointCHR $item
     * @return \ChronopostSearchBt\StructType\PointCHRResult
     */
    public function addToListePointRelais(\ChronopostSearchBt\StructType\PointCHR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostSearchBt\StructType\PointCHR) {
            throw new InvalidArgumentException(sprintf('The listePointRelais property can only contain items of type \ChronopostSearchBt\StructType\PointCHR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listePointRelais[] = $item;
        
        return $this;
    }
}
