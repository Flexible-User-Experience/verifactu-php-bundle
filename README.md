VerifactuBundle
===============

VerifactuBundle is Symfony bundle to deal with Veri*Factu Spanish digital
invoicing law. This bundle relies on `josemmo/verifactu-php` PHP library.

## Disclaimer

This Symfony bundle is provided without a responsible declaration, as it is **not** an Invoicing Computer System ("Sistema Informático de Facturación" or "SIF" as known reference in Spain's law).
This is a third-party tool to integrate your SIF with Veri*Factu API. It is **your responsibility** to audit its code and use it in accordance with the applicable regulations.

For more information, see [Artículo 13 del RD 1007/2023](https://www.boe.es/buscar/act.php?id=BOE-A-2023-24840#a1-5).

Installation
------------

VerifactuBundle requires PHP 8.2 or higher and Symfony 6.4 or higher. Run the
following command to install it in your application:

```shell
composer require flux/verifactu-bundle
```

Code Style
----------

```shell
php ./vendor/bin/php-cs-fixer fix src/
```

Testing
-------

```shell
php ./vendor/bin/phpunit tests/
```
