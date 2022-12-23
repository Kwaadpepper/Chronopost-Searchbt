<?php

declare(strict_types=1);
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
            'pointCHRResult' => '\\StructType\\PointCHRResult',
            'pointCHR' => '\\StructType\\PointCHR',
            'listeHoraireOuverturePourUnJour' => '\\StructType\\ListeHoraireOuverturePourUnJour',
            'horaireOuverture' => '\\StructType\\HoraireOuverture',
            'periodeFermeture' => '\\StructType\\PeriodeFermeture',
            'bureauDeTabac' => '\\StructType\\BureauDeTabac',
            'bureauDeTabacAvecCoord' => '\\StructType\\BureauDeTabacAvecCoord',
            'tourneeCompleteResult' => '\\StructType\\TourneeCompleteResult',
            'tourneeComplete' => '\\StructType\\TourneeComplete',
            'tournee' => '\\StructType\\Tournee',
            'pointChronopost' => '\\StructType\\PointChronopost',
            'pointChronopostAvecCoord' => '\\StructType\\PointChronopostAvecCoord',
            'bureauDeTabacAvecPF' => '\\StructType\\BureauDeTabacAvecPF',
            'tourneeResult' => '\\StructType\\TourneeResult',
            'recherchePointChronopostInterParServiceAGL' => '\\StructType\\RecherchePointChronopostInterParServiceAGL',
            'recherchePointChronopostInterParServiceAGLResponse' => '\\StructType\\RecherchePointChronopostInterParServiceAGLResponse',
            'recherchePointChronopost' => '\\StructType\\RecherchePointChronopost',
            'recherchePointChronopostResponse' => '\\StructType\\RecherchePointChronopostResponse',
            'recherchePointChronopostInterParService' => '\\StructType\\RecherchePointChronopostInterParService',
            'recherchePointChronopostInterParServiceResponse' => '\\StructType\\RecherchePointChronopostInterParServiceResponse',
            'rechercheBtParCodeproduitEtCodepostalEtDate' => '\\StructType\\RechercheBtParCodeproduitEtCodepostalEtDate',
            'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => '\\StructType\\RechercheBtParCodeproduitEtCodepostalEtDateResponse',
            'rechercheBtParIdChronopostA2Pas' => '\\StructType\\RechercheBtParIdChronopostA2Pas',
            'rechercheBtParIdChronopostA2PasResponse' => '\\StructType\\RechercheBtParIdChronopostA2PasResponse',
            'rechercheTourneeParTypeTourneeEtPosteComptable' => '\\StructType\\RechercheTourneeParTypeTourneeEtPosteComptable',
            'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => '\\StructType\\RechercheTourneeParTypeTourneeEtPosteComptableResponse',
            'recherchePointChronopostParId' => '\\StructType\\RecherchePointChronopostParId',
            'recherchePointChronopostParIdResponse' => '\\StructType\\RecherchePointChronopostParIdResponse',
            'rechercheDetailPointChronopost' => '\\StructType\\RechercheDetailPointChronopost',
            'rechercheDetailPointChronopostResponse' => '\\StructType\\RechercheDetailPointChronopostResponse',
            'recherchePointChronopostParCoordonneesGeographiques' => '\\StructType\\RecherchePointChronopostParCoordonneesGeographiques',
            'recherchePointChronopostParCoordonneesGeographiquesResponse' => '\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesResponse',
            'recherchePointChronopostInter' => '\\StructType\\RecherchePointChronopostInter',
            'recherchePointChronopostInterResponse' => '\\StructType\\RecherchePointChronopostInterResponse',
            'recherchePointRelaisParCoordonneesGeographiques' => '\\StructType\\RecherchePointRelaisParCoordonneesGeographiques',
            'recherchePointRelaisParCoordonneesGeographiquesResponse' => '\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesResponse',
            'recherchePointChronopostAvecCoordParId' => '\\StructType\\RecherchePointChronopostAvecCoordParId',
            'recherchePointChronopostAvecCoordParIdResponse' => '\\StructType\\RecherchePointChronopostAvecCoordParIdResponse',
            'getAllChronopostAgences' => '\\StructType\\GetAllChronopostAgences',
            'getAllChronopostAgencesResponse' => '\\StructType\\GetAllChronopostAgencesResponse',
            'recherchePointRelaisParCoordonneesGeographiquesParService' => '\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesParService',
            'recherchePointRelaisParCoordonneesGeographiquesParServiceResponse' => '\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParIdChronopostA2Pas' => '\\StructType\\RechercheBtAvecPFParIdChronopostA2Pas',
            'rechercheBtAvecPFParIdChronopostA2PasResponse' => '\\StructType\\RechercheBtAvecPFParIdChronopostA2PasResponse',
            'rechercheDetailPointChronopostInter' => '\\StructType\\RechercheDetailPointChronopostInter',
            'rechercheDetailPointChronopostInterResponse' => '\\StructType\\RechercheDetailPointChronopostInterResponse',
            'recherchePointChronopostParCoordonneesGeographiquesParService' => '\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesParService',
            'recherchePointChronopostParCoordonneesGeographiquesParServiceResponse' => '\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => '\\StructType\\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => '\\StructType\\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
            'rechercheTournee' => '\\StructType\\RechercheTournee',
            'rechercheTourneeResponse' => '\\StructType\\RechercheTourneeResponse',
        ];
    }
}
