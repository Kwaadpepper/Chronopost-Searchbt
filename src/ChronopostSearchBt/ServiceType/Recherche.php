<?php

declare(strict_types=1);

namespace ChronopostSearchBt\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recherche ServiceType
 * @subpackage Services
 */
class Recherche extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParServiceAGL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGLResponse|bool
     */
    public function recherchePointChronopostInterParServiceAGL(\ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGL $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParServiceAGL = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParServiceAGL', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParServiceAGL;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopost $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostResponse|bool
     */
    public function recherchePointChronopost(\ChronopostSearchBt\StructType\RecherchePointChronopost $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopost = $this->getSoapClient()->__soapCall('recherchePointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostInterParService $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceResponse|bool
     */
    public function recherchePointChronopostInterParService(\ChronopostSearchBt\StructType\RecherchePointChronopostInterParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParService = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDate $parameters
     * @return \ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(\ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheBtParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheBtParIdChronopostA2Pas $parameters
     * @return \ChronopostSearchBt\StructType\RechercheBtParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtParIdChronopostA2Pas(\ChronopostSearchBt\StructType\RechercheBtParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheTourneeParTypeTourneeEtPosteComptable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptable $parameters
     * @return \ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse|bool
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(\ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptable $parameters)
    {
        try {
            $this->setResult($resultRechercheTourneeParTypeTourneeEtPosteComptable = $this->getSoapClient()->__soapCall('rechercheTourneeParTypeTourneeEtPosteComptable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTourneeParTypeTourneeEtPosteComptable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostParId $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostParIdResponse|bool
     */
    public function recherchePointChronopostParId(\ChronopostSearchBt\StructType\RecherchePointChronopostParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParId = $this->getSoapClient()->__soapCall('recherchePointChronopostParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheDetailPointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheDetailPointChronopost $parameters
     * @return \ChronopostSearchBt\StructType\RechercheDetailPointChronopostResponse|bool
     */
    public function rechercheDetailPointChronopost(\ChronopostSearchBt\StructType\RechercheDetailPointChronopost $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopost = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiques $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiques(\ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostInter $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostInterResponse|bool
     */
    public function recherchePointChronopostInter(\ChronopostSearchBt\StructType\RecherchePointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInter = $this->getSoapClient()->__soapCall('recherchePointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiques $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiques(\ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostAvecCoordParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostAvecCoordParId $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostAvecCoordParIdResponse|bool
     */
    public function recherchePointChronopostAvecCoordParId(\ChronopostSearchBt\StructType\RecherchePointChronopostAvecCoordParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostAvecCoordParId = $this->getSoapClient()->__soapCall('recherchePointChronopostAvecCoordParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostAvecCoordParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiquesParService $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiquesParService(\ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheBtAvecPFParIdChronopostA2Pas $parameters
     * @return \ChronopostSearchBt\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(\ChronopostSearchBt\StructType\RechercheBtAvecPFParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheDetailPointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheDetailPointChronopostInter $parameters
     * @return \ChronopostSearchBt\StructType\RechercheDetailPointChronopostInterResponse|bool
     */
    public function rechercheDetailPointChronopostInter(\ChronopostSearchBt\StructType\RechercheDetailPointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopostInter = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesParService $parameters
     * @return \ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiquesParService(\ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters
     * @return \ChronopostSearchBt\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(\ChronopostSearchBt\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheTournee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostSearchBt\StructType\RechercheTournee $parameters
     * @return \ChronopostSearchBt\StructType\RechercheTourneeResponse|bool
     */
    public function rechercheTournee(\ChronopostSearchBt\StructType\RechercheTournee $parameters)
    {
        try {
            $this->setResult($resultRechercheTournee = $this->getSoapClient()->__soapCall('rechercheTournee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTournee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostSearchBt\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|\ChronopostSearchBt\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse|\ChronopostSearchBt\StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse|\ChronopostSearchBt\StructType\RechercheBtParIdChronopostA2PasResponse|\ChronopostSearchBt\StructType\RechercheDetailPointChronopostInterResponse|\ChronopostSearchBt\StructType\RechercheDetailPointChronopostResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostAvecCoordParIdResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceAGLResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostInterParServiceResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostInterResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostParIdResponse|\ChronopostSearchBt\StructType\RecherchePointChronopostResponse|\ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|\ChronopostSearchBt\StructType\RecherchePointRelaisParCoordonneesGeographiquesResponse|\ChronopostSearchBt\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse|\ChronopostSearchBt\StructType\RechercheTourneeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
