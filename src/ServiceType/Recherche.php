<?php

declare(strict_types=1);

namespace ServiceType;

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
     * @param \StructType\RecherchePointChronopostInterParServiceAGL $parameters
     * @return \StructType\RecherchePointChronopostInterParServiceAGLResponse|bool
     */
    public function recherchePointChronopostInterParServiceAGL(\StructType\RecherchePointChronopostInterParServiceAGL $parameters)
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
     * @param \StructType\RecherchePointChronopost $parameters
     * @return \StructType\RecherchePointChronopostResponse|bool
     */
    public function recherchePointChronopost(\StructType\RecherchePointChronopost $parameters)
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
     * @param \StructType\RecherchePointChronopostInterParService $parameters
     * @return \StructType\RecherchePointChronopostInterParServiceResponse|bool
     */
    public function recherchePointChronopostInterParService(\StructType\RecherchePointChronopostInterParService $parameters)
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
     * @param \StructType\RechercheBtParCodeproduitEtCodepostalEtDate $parameters
     * @return \StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(\StructType\RechercheBtParCodeproduitEtCodepostalEtDate $parameters)
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
     * @param \StructType\RechercheBtParIdChronopostA2Pas $parameters
     * @return \StructType\RechercheBtParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtParIdChronopostA2Pas(\StructType\RechercheBtParIdChronopostA2Pas $parameters)
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
     * @param \StructType\RechercheTourneeParTypeTourneeEtPosteComptable $parameters
     * @return \StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse|bool
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(\StructType\RechercheTourneeParTypeTourneeEtPosteComptable $parameters)
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
     * @param \StructType\RecherchePointChronopostParId $parameters
     * @return \StructType\RecherchePointChronopostParIdResponse|bool
     */
    public function recherchePointChronopostParId(\StructType\RecherchePointChronopostParId $parameters)
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
     * @param \StructType\RechercheDetailPointChronopost $parameters
     * @return \StructType\RechercheDetailPointChronopostResponse|bool
     */
    public function rechercheDetailPointChronopost(\StructType\RechercheDetailPointChronopost $parameters)
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
     * @param \StructType\RecherchePointChronopostParCoordonneesGeographiques $parameters
     * @return \StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiques(\StructType\RecherchePointChronopostParCoordonneesGeographiques $parameters)
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
     * @param \StructType\RecherchePointChronopostInter $parameters
     * @return \StructType\RecherchePointChronopostInterResponse|bool
     */
    public function recherchePointChronopostInter(\StructType\RecherchePointChronopostInter $parameters)
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
     * @param \StructType\RecherchePointRelaisParCoordonneesGeographiques $parameters
     * @return \StructType\RecherchePointRelaisParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiques(\StructType\RecherchePointRelaisParCoordonneesGeographiques $parameters)
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
     * @param \StructType\RecherchePointChronopostAvecCoordParId $parameters
     * @return \StructType\RecherchePointChronopostAvecCoordParIdResponse|bool
     */
    public function recherchePointChronopostAvecCoordParId(\StructType\RecherchePointChronopostAvecCoordParId $parameters)
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
     * @param \StructType\RecherchePointRelaisParCoordonneesGeographiquesParService $parameters
     * @return \StructType\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiquesParService(\StructType\RecherchePointRelaisParCoordonneesGeographiquesParService $parameters)
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
     * @param \StructType\RechercheBtAvecPFParIdChronopostA2Pas $parameters
     * @return \StructType\RechercheBtAvecPFParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(\StructType\RechercheBtAvecPFParIdChronopostA2Pas $parameters)
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
     * @param \StructType\RechercheDetailPointChronopostInter $parameters
     * @return \StructType\RechercheDetailPointChronopostInterResponse|bool
     */
    public function rechercheDetailPointChronopostInter(\StructType\RechercheDetailPointChronopostInter $parameters)
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
     * @param \StructType\RecherchePointChronopostParCoordonneesGeographiquesParService $parameters
     * @return \StructType\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiquesParService(\StructType\RecherchePointChronopostParCoordonneesGeographiquesParService $parameters)
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
     * @param \StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters
     * @return \StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters)
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
     * @param \StructType\RechercheTournee $parameters
     * @return \StructType\RechercheTourneeResponse|bool
     */
    public function rechercheTournee(\StructType\RechercheTournee $parameters)
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
     * @return \StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse|\StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse|\StructType\RechercheBtParIdChronopostA2PasResponse|\StructType\RechercheDetailPointChronopostInterResponse|\StructType\RechercheDetailPointChronopostResponse|\StructType\RecherchePointChronopostAvecCoordParIdResponse|\StructType\RecherchePointChronopostInterParServiceAGLResponse|\StructType\RecherchePointChronopostInterParServiceResponse|\StructType\RecherchePointChronopostInterResponse|\StructType\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse|\StructType\RecherchePointChronopostParIdResponse|\StructType\RecherchePointChronopostResponse|\StructType\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|\StructType\RecherchePointRelaisParCoordonneesGeographiquesResponse|\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse|\StructType\RechercheTourneeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
