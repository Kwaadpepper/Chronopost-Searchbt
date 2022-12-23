<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Recherche ServiceType
 */
$recherche = new \ServiceType\Recherche($options);
/**
 * Sample call for recherchePointChronopostInterParServiceAGL operation/method
 */
if ($recherche->recherchePointChronopostInterParServiceAGL(new \StructType\RecherchePointChronopostInterParServiceAGL()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopost operation/method
 */
if ($recherche->recherchePointChronopost(new \StructType\RecherchePointChronopost()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostInterParService operation/method
 */
if ($recherche->recherchePointChronopostInterParService(new \StructType\RecherchePointChronopostInterParService()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtParCodeproduitEtCodepostalEtDate operation/method
 */
if ($recherche->rechercheBtParCodeproduitEtCodepostalEtDate(new \StructType\RechercheBtParCodeproduitEtCodepostalEtDate()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtParIdChronopostA2Pas operation/method
 */
if ($recherche->rechercheBtParIdChronopostA2Pas(new \StructType\RechercheBtParIdChronopostA2Pas()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheTourneeParTypeTourneeEtPosteComptable operation/method
 */
if ($recherche->rechercheTourneeParTypeTourneeEtPosteComptable(new \StructType\RechercheTourneeParTypeTourneeEtPosteComptable()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostParId operation/method
 */
if ($recherche->recherchePointChronopostParId(new \StructType\RecherchePointChronopostParId()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheDetailPointChronopost operation/method
 */
if ($recherche->rechercheDetailPointChronopost(new \StructType\RechercheDetailPointChronopost()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostParCoordonneesGeographiques
 * operation/method
 */
if ($recherche->recherchePointChronopostParCoordonneesGeographiques(new \StructType\RecherchePointChronopostParCoordonneesGeographiques()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostInter operation/method
 */
if ($recherche->recherchePointChronopostInter(new \StructType\RecherchePointChronopostInter()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointRelaisParCoordonneesGeographiques operation/method
 */
if ($recherche->recherchePointRelaisParCoordonneesGeographiques(new \StructType\RecherchePointRelaisParCoordonneesGeographiques()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostAvecCoordParId operation/method
 */
if ($recherche->recherchePointChronopostAvecCoordParId(new \StructType\RecherchePointChronopostAvecCoordParId()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointRelaisParCoordonneesGeographiquesParService
 * operation/method
 */
if ($recherche->recherchePointRelaisParCoordonneesGeographiquesParService(new \StructType\RecherchePointRelaisParCoordonneesGeographiquesParService()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtAvecPFParIdChronopostA2Pas operation/method
 */
if ($recherche->rechercheBtAvecPFParIdChronopostA2Pas(new \StructType\RechercheBtAvecPFParIdChronopostA2Pas()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheDetailPointChronopostInter operation/method
 */
if ($recherche->rechercheDetailPointChronopostInter(new \StructType\RechercheDetailPointChronopostInter()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostParCoordonneesGeographiquesParService
 * operation/method
 */
if ($recherche->recherchePointChronopostParCoordonneesGeographiquesParService(new \StructType\RecherchePointChronopostParCoordonneesGeographiquesParService()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtAvecPFParCodeproduitEtCodepostalEtDate
 * operation/method
 */
if ($recherche->rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(new \StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheTournee operation/method
 */
if ($recherche->rechercheTournee(new \StructType\RechercheTournee()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getAllChronopostAgences operation/method
 */
if ($get->getAllChronopostAgences(new \StructType\GetAllChronopostAgences()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
