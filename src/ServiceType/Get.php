<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getAllChronopostAgences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllChronopostAgences $parameters
     * @return \StructType\GetAllChronopostAgencesResponse|bool
     */
    public function getAllChronopostAgences(\StructType\GetAllChronopostAgences $parameters)
    {
        try {
            $this->setResult($resultGetAllChronopostAgences = $this->getSoapClient()->__soapCall('getAllChronopostAgences', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllChronopostAgences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAllChronopostAgencesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
