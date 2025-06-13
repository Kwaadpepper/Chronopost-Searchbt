# Chronopost PointRelaisService PHP Soap generated Lib

LE SERVICE DE RECHERCHE DE POINT DE LIVRAISON CHRONOPOST (PointRelaisService)

Chronopost WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl

```sh
composer require kwaadpepper/chronopost-searchbt
```

```sh
wsdltophp generate:package \
    --urlorpath="https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl" --namespace ChronopostSearchBt \
    --destination="." \
    --composer-name="kwaadpepper/chronopost-searchbt" \
    --force
```
