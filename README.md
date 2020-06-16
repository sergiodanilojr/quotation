# Quotation @ElePHPant

[![Maintainer](http://img.shields.io/badge/maintainer-@sergiodanilojr-blue.svg?style=flat-square)](https://twitter.com/sergiodanilojr)
[![Source Code](http://img.shields.io/badge/source-elephpant/quotation-blue.svg?style=flat-square)](https://github.com/sergiodanilojr/quotation)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/elephpant/quotation.svg?style=flat-square)](https://packagist.org/packages/elephpant/quotation)
[![Latest Version](https://img.shields.io/github/release/elephpant/quotation.svg?style=flat-square)](https://github.com/sergiodanilojr/quotation/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/sergiodanilojr/quotation.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergiodanilojr/quotation)
[![Quality Score](https://img.shields.io/scrutinizer/g/sergiodanilojr/quotation.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergiodanilojr/quotation)
[![Total Downloads](https://img.shields.io/packagist/dt/elephpant/quotation.svg?style=flat-square)](https://packagist.org/packages/elephpant/quotation)

###### Quotation is a simple way to extract the currency situation converted for CURRENCY REAL (BRL), either on the current day or in previous periods, as well as at defined intervals. Contains a vast collection of coins to get your status for REAL (BRL).

Quotation é uma forma simples de extrair a situação da moeda, seja no dia corrente ou em períodos anteriores, bem como em intervalos definidos. Contém uma vasta coleção de moedas para poder obter o seu status e converter para o REAL (BRL). 

## NOTE: This component consumes the API of Currency Quotation from AwesomeAPI (https://awesomeapi.com.br)
NOTA: Este componente consome a API de Cotação de Moedas da AwesomeAPI (https://awesomeapi.com.br)

### Highlights

- Extremaly Easy
- Supports several Currencies
- Flexible
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

### Currencies (moedas)

- USD-BRL (Dólar Comercial)
- USDT-BRL (Dólar Turismo)
- CAD-BRL (Dólar Canadense)
- AUD-BRL (Dólar Australiano)
- EUR-BRL (Euro)
- GBP-BRL (Libra Esterlina)
- ARS-BRL (Peso Argentino)
- JPY-BRL (Iene Japonês)
- CHF-BRL (Franco Suíço)
- CNY-BRL (Yuan Chinês)
- YLS-BRL (Novo Shekel Israelense)
- BTC-BRL (Bitcoin)
- LTC-BRL (Litecoin)
- ETH-BRL (Ethereum)
- XRP-BRL (Ripple)

## Installation

Quotation is available via Composer:

```bash
"elephpant/quotation": "*"
```

or run

```bash
composer require elephpant/quotation
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:


#### There's one specific Class for each Currency.

```php
<?php
require __DIR__ . "/vendor/autoload.php";

use \ElePHPant\Quotation\Currencies\USDollar;
use \ElePHPant\Quotation\Currencies\Euro;
use \ElePHPant\Quotation\Currencies\Bitcoin;
use \ElePHPant\Quotation\Currencies\PoundSterling;
use \ElePHPant\Quotation\Currencies\Litecoin;
use \ElePHPant\Quotation\Currencies\JapaneseYene;


$dollar = new USDollar(); 
$dollar = new Euro(); 
$bitcoin = new Bitcoin();
$poundSterling = new PoundSterling();
$litecoin = new Litecoin();
$yene = new JapaneseYene();

//(For others classes, check the folder Currencies)
```

#### Response Formats

```php
<?php
require __DIR__ . "/vendor/autoload.php";

use \ElePHPant\Quotation\Currencies\USDollar;
use \ElePHPant\Quotation\Quotation;

// Each Class have a Param for format response in your Constructor Method.
// You can change the format Response (JSON or XML) 


$dollar = new USDollar(Quotation::RESPONSE_JSON); //Default 
$dollar = new USDollar(Quotation::RESPONSE_XML); //Bring the Response in XML format, but not structured

```

#### Methods

```php
<?php
require __DIR__ . "/vendor/autoload.php";

use \ElePHPant\Quotation\Currencies\USDollar;

$dollar = new USDollar();

//Bring the current status of currency with your variations in value and Percentual
$dollar->today(); 

//Bring the status of Currency in one interval
$dollar->interval(new \DateTime("2020-01-05"), new \DateTime("2020-03-05"));

//Return all status of currency in the last DAYS informed in the param
$dollar->period(4);
```

##Constants


```php
<?php
require __DIR__ . "/vendor/autoload.php";

use \ElePHPant\Quotation\Quotation;

//RESPONSE FORMATS

Quotation::RESPONSE_JSON;
Quotation::RESPONSE_XML;

//CURRENCIES
Quotation::CURRENCY_DOLAR;
Quotation::CURRENCY_DOLAR_TOURISM;
Quotation::CURRENCY_EURO;
Quotation::CURRENCY_CANADIAN_DOLAR;
Quotation::CURRENCY_AUSTRALIAN_DOLAR;
Quotation::CURRENCY_STERLING;
Quotation::CURRENCY_AUSTRALIAN_DOLAR;
Quotation::CURRENCY_ARGENTINIAN_PESO;
Quotation::CURRENCY_YEN_JAPAN;
Quotation::CURRENCY_SWISS_FRANC;
Quotation::CURRENCY_AUSTRALIAN_DOLAR;
Quotation::CURRENCY_CHINESE_YUAN;
Quotation::CURRENCY_ISRAELI_SHEKEL;
Quotation::CURRENCY_BITCOIN;
Quotation::CURRENCY_ETHEREUM;
Quotation::CURRENCY_LITECOIN;
Quotation::CURRENCY_RIPPLE;

```

#### Fetch status of several Currencies in same time

```php
<?php
require __DIR__ . "/vendor/autoload.php";

use \ElePHPant\Quotation\Quotation;
use \ElePHPant\Quotation\Generic;

$currencies = [
    Quotation::CURRENCY_DOLAR,
    Quotation::CURRENCY_EURO,
    Quotation::CURRENCY_BITCOIN
];

$generic = (new Generic($currencies))->quote();

var_dump($generic);

```
## Response Keys

- bid (Buy || Compra)
- ask (Sell || Venda)
- varBid (Change || Variação em valor)
- pctChange (Percentual Change || Variação em Percentual)
- high (High || Alta da Moeda)
- low (Baixa || Baixa da Moeda)


## Thanks APIAwesome for yours simples and intuitives APIs and Documentation

[APIAwesome - API de Moedas](https://docs.awesomeapi.com.br/api-de-moedas)


## Contributing

Please see [CONTRIBUTING](https://github.com/sergiodanilojr/quotation/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email sergiodanilojr@hotmail.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para sergiodanilojr@hotmail.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Sérgio Danilo Jr.](https://github.com/sergiodanilojr) (Developer)
- [All Contributors](https://github.com/sergiodanilojr/quotation/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/sergiodanilojr/quotation/blob/master/LICENSE) for more information.