<?php

declare(strict_types=1);

namespace ChronopostSearchBt;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'recherchePointChronopostInterParServiceAGL' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostInterParServiceAGL',
            'recherchePointChronopostInterParServiceAGLResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostInterParServiceAGLResponse',
            'pointCHRResult' => '\\ChronopostSearchBt\\StructType\\PointCHRResult',
            'pointCHR' => '\\ChronopostSearchBt\\StructType\\PointCHR',
            'listeHoraireOuverturePourUnJour' => '\\ChronopostSearchBt\\StructType\\ListeHoraireOuverturePourUnJour',
            'horaireOuverture' => '\\ChronopostSearchBt\\StructType\\HoraireOuverture',
            'periodeFermeture' => '\\ChronopostSearchBt\\StructType\\PeriodeFermeture',
            'recherchePointChronopost' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopost',
            'recherchePointChronopostResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostResponse',
            'recherchePointChronopostInterParService' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostInterParService',
            'recherchePointChronopostInterParServiceResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostInterParServiceResponse',
            'rechercheBtParCodeproduitEtCodepostalEtDate' => '\\ChronopostSearchBt\\StructType\\RechercheBtParCodeproduitEtCodepostalEtDate',
            'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => '\\ChronopostSearchBt\\StructType\\RechercheBtParCodeproduitEtCodepostalEtDateResponse',
            'bureauDeTabacAvecCoord' => '\\ChronopostSearchBt\\StructType\\BureauDeTabacAvecCoord',
            'bureauDeTabac' => '\\ChronopostSearchBt\\StructType\\BureauDeTabac',
            'rechercheBtParIdChronopostA2Pas' => '\\ChronopostSearchBt\\StructType\\RechercheBtParIdChronopostA2Pas',
            'rechercheBtParIdChronopostA2PasResponse' => '\\ChronopostSearchBt\\StructType\\RechercheBtParIdChronopostA2PasResponse',
            'rechercheTourneeParTypeTourneeEtPosteComptable' => '\\ChronopostSearchBt\\StructType\\RechercheTourneeParTypeTourneeEtPosteComptable',
            'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => '\\ChronopostSearchBt\\StructType\\RechercheTourneeParTypeTourneeEtPosteComptableResponse',
            'tourneeCompleteResult' => '\\ChronopostSearchBt\\StructType\\TourneeCompleteResult',
            'tourneeComplete' => '\\ChronopostSearchBt\\StructType\\TourneeComplete',
            'tournee' => '\\ChronopostSearchBt\\StructType\\Tournee',
            'recherchePointChronopostParId' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostParId',
            'recherchePointChronopostParIdResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostParIdResponse',
            'pointChronopost' => '\\ChronopostSearchBt\\StructType\\PointChronopost',
            'rechercheDetailPointChronopost' => '\\ChronopostSearchBt\\StructType\\RechercheDetailPointChronopost',
            'rechercheDetailPointChronopostResponse' => '\\ChronopostSearchBt\\StructType\\RechercheDetailPointChronopostResponse',
            'recherchePointChronopostParCoordonneesGeographiques' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostParCoordonneesGeographiques',
            'recherchePointChronopostParCoordonneesGeographiquesResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesResponse',
            'recherchePointChronopostInter' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostInter',
            'recherchePointChronopostInterResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostInterResponse',
            'recherchePointRelaisParCoordonneesGeographiques' => '\\ChronopostSearchBt\\StructType\\RecherchePointRelaisParCoordonneesGeographiques',
            'recherchePointRelaisParCoordonneesGeographiquesResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesResponse',
            'recherchePointChronopostAvecCoordParId' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostAvecCoordParId',
            'recherchePointChronopostAvecCoordParIdResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostAvecCoordParIdResponse',
            'pointChronopostAvecCoord' => '\\ChronopostSearchBt\\StructType\\PointChronopostAvecCoord',
            'getAllChronopostAgences' => '\\ChronopostSearchBt\\StructType\\GetAllChronopostAgences',
            'getAllChronopostAgencesResponse' => '\\ChronopostSearchBt\\StructType\\GetAllChronopostAgencesResponse',
            'recherchePointRelaisParCoordonneesGeographiquesParService' => '\\ChronopostSearchBt\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesParService',
            'recherchePointRelaisParCoordonneesGeographiquesParServiceResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParIdChronopostA2Pas' => '\\ChronopostSearchBt\\StructType\\RechercheBtAvecPFParIdChronopostA2Pas',
            'rechercheBtAvecPFParIdChronopostA2PasResponse' => '\\ChronopostSearchBt\\StructType\\RechercheBtAvecPFParIdChronopostA2PasResponse',
            'bureauDeTabacAvecPF' => '\\ChronopostSearchBt\\StructType\\BureauDeTabacAvecPF',
            'rechercheDetailPointChronopostInter' => '\\ChronopostSearchBt\\StructType\\RechercheDetailPointChronopostInter',
            'rechercheDetailPointChronopostInterResponse' => '\\ChronopostSearchBt\\StructType\\RechercheDetailPointChronopostInterResponse',
            'recherchePointChronopostParCoordonneesGeographiquesParService' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesParService',
            'recherchePointChronopostParCoordonneesGeographiquesParServiceResponse' => '\\ChronopostSearchBt\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => '\\ChronopostSearchBt\\StructType\\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => '\\ChronopostSearchBt\\StructType\\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
            'rechercheTournee' => '\\ChronopostSearchBt\\StructType\\RechercheTournee',
            'rechercheTourneeResponse' => '\\ChronopostSearchBt\\StructType\\RechercheTourneeResponse',
            'tourneeResult' => '\\ChronopostSearchBt\\StructType\\TourneeResult',
        ];
    }
}
