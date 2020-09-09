<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/moneyphp/money/src/Money.php-1584553799,/Users/mateuszcholewka/Sites/MovieRental/vendor/moneyphp/money/src/MoneyFactory.php-1584553799',
   'data' => 
  array (
    '82cbe9ea018e28291526c5fe7ba026ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Money Value Object.
 *
 * @author Mathias Verraes
 *
 * @psalm-immutable
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8c8f25b5a297fd75dcf1f705ffbcbc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This is a generated file. Do not edit it manually!
 *
 * @method static Money AED(string|int $amount)
 * @method static Money ALL(string|int $amount)
 * @method static Money AMD(string|int $amount)
 * @method static Money ANG(string|int $amount)
 * @method static Money AOA(string|int $amount)
 * @method static Money ARS(string|int $amount)
 * @method static Money AUD(string|int $amount)
 * @method static Money AWG(string|int $amount)
 * @method static Money AZN(string|int $amount)
 * @method static Money BAM(string|int $amount)
 * @method static Money BBD(string|int $amount)
 * @method static Money BDT(string|int $amount)
 * @method static Money BGN(string|int $amount)
 * @method static Money BHD(string|int $amount)
 * @method static Money BIF(string|int $amount)
 * @method static Money BMD(string|int $amount)
 * @method static Money BND(string|int $amount)
 * @method static Money BOB(string|int $amount)
 * @method static Money BOV(string|int $amount)
 * @method static Money BRL(string|int $amount)
 * @method static Money BSD(string|int $amount)
 * @method static Money BTN(string|int $amount)
 * @method static Money BWP(string|int $amount)
 * @method static Money BYN(string|int $amount)
 * @method static Money BZD(string|int $amount)
 * @method static Money CAD(string|int $amount)
 * @method static Money CDF(string|int $amount)
 * @method static Money CHE(string|int $amount)
 * @method static Money CHF(string|int $amount)
 * @method static Money CHW(string|int $amount)
 * @method static Money CLF(string|int $amount)
 * @method static Money CLP(string|int $amount)
 * @method static Money CNY(string|int $amount)
 * @method static Money COP(string|int $amount)
 * @method static Money COU(string|int $amount)
 * @method static Money CRC(string|int $amount)
 * @method static Money CUC(string|int $amount)
 * @method static Money CUP(string|int $amount)
 * @method static Money CVE(string|int $amount)
 * @method static Money CZK(string|int $amount)
 * @method static Money DJF(string|int $amount)
 * @method static Money DKK(string|int $amount)
 * @method static Money DOP(string|int $amount)
 * @method static Money DZD(string|int $amount)
 * @method static Money EGP(string|int $amount)
 * @method static Money ERN(string|int $amount)
 * @method static Money ETB(string|int $amount)
 * @method static Money EUR(string|int $amount)
 * @method static Money FJD(string|int $amount)
 * @method static Money FKP(string|int $amount)
 * @method static Money GBP(string|int $amount)
 * @method static Money GEL(string|int $amount)
 * @method static Money GHS(string|int $amount)
 * @method static Money GIP(string|int $amount)
 * @method static Money GMD(string|int $amount)
 * @method static Money GNF(string|int $amount)
 * @method static Money GTQ(string|int $amount)
 * @method static Money GYD(string|int $amount)
 * @method static Money HKD(string|int $amount)
 * @method static Money HNL(string|int $amount)
 * @method static Money HRK(string|int $amount)
 * @method static Money HTG(string|int $amount)
 * @method static Money HUF(string|int $amount)
 * @method static Money IDR(string|int $amount)
 * @method static Money ILS(string|int $amount)
 * @method static Money INR(string|int $amount)
 * @method static Money IQD(string|int $amount)
 * @method static Money IRR(string|int $amount)
 * @method static Money ISK(string|int $amount)
 * @method static Money JMD(string|int $amount)
 * @method static Money JOD(string|int $amount)
 * @method static Money JPY(string|int $amount)
 * @method static Money KES(string|int $amount)
 * @method static Money KGS(string|int $amount)
 * @method static Money KHR(string|int $amount)
 * @method static Money KMF(string|int $amount)
 * @method static Money KPW(string|int $amount)
 * @method static Money KRW(string|int $amount)
 * @method static Money KWD(string|int $amount)
 * @method static Money KYD(string|int $amount)
 * @method static Money KZT(string|int $amount)
 * @method static Money LAK(string|int $amount)
 * @method static Money LBP(string|int $amount)
 * @method static Money LKR(string|int $amount)
 * @method static Money LRD(string|int $amount)
 * @method static Money LSL(string|int $amount)
 * @method static Money LYD(string|int $amount)
 * @method static Money MAD(string|int $amount)
 * @method static Money MDL(string|int $amount)
 * @method static Money MGA(string|int $amount)
 * @method static Money MKD(string|int $amount)
 * @method static Money MMK(string|int $amount)
 * @method static Money MNT(string|int $amount)
 * @method static Money MOP(string|int $amount)
 * @method static Money MRU(string|int $amount)
 * @method static Money MUR(string|int $amount)
 * @method static Money MVR(string|int $amount)
 * @method static Money MWK(string|int $amount)
 * @method static Money MXN(string|int $amount)
 * @method static Money MXV(string|int $amount)
 * @method static Money MYR(string|int $amount)
 * @method static Money MZN(string|int $amount)
 * @method static Money NAD(string|int $amount)
 * @method static Money NGN(string|int $amount)
 * @method static Money NIO(string|int $amount)
 * @method static Money NOK(string|int $amount)
 * @method static Money NPR(string|int $amount)
 * @method static Money NZD(string|int $amount)
 * @method static Money OMR(string|int $amount)
 * @method static Money PAB(string|int $amount)
 * @method static Money PEN(string|int $amount)
 * @method static Money PGK(string|int $amount)
 * @method static Money PHP(string|int $amount)
 * @method static Money PKR(string|int $amount)
 * @method static Money PLN(string|int $amount)
 * @method static Money PYG(string|int $amount)
 * @method static Money QAR(string|int $amount)
 * @method static Money RON(string|int $amount)
 * @method static Money RSD(string|int $amount)
 * @method static Money RUB(string|int $amount)
 * @method static Money RWF(string|int $amount)
 * @method static Money SAR(string|int $amount)
 * @method static Money SBD(string|int $amount)
 * @method static Money SCR(string|int $amount)
 * @method static Money SDG(string|int $amount)
 * @method static Money SEK(string|int $amount)
 * @method static Money SGD(string|int $amount)
 * @method static Money SHP(string|int $amount)
 * @method static Money SLL(string|int $amount)
 * @method static Money SOS(string|int $amount)
 * @method static Money SRD(string|int $amount)
 * @method static Money SSP(string|int $amount)
 * @method static Money STN(string|int $amount)
 * @method static Money SVC(string|int $amount)
 * @method static Money SYP(string|int $amount)
 * @method static Money SZL(string|int $amount)
 * @method static Money THB(string|int $amount)
 * @method static Money TJS(string|int $amount)
 * @method static Money TMT(string|int $amount)
 * @method static Money TND(string|int $amount)
 * @method static Money TOP(string|int $amount)
 * @method static Money TRY(string|int $amount)
 * @method static Money TTD(string|int $amount)
 * @method static Money TWD(string|int $amount)
 * @method static Money TZS(string|int $amount)
 * @method static Money UAH(string|int $amount)
 * @method static Money UGX(string|int $amount)
 * @method static Money USD(string|int $amount)
 * @method static Money USN(string|int $amount)
 * @method static Money UYI(string|int $amount)
 * @method static Money UYU(string|int $amount)
 * @method static Money UYW(string|int $amount)
 * @method static Money UZS(string|int $amount)
 * @method static Money VES(string|int $amount)
 * @method static Money VND(string|int $amount)
 * @method static Money VUV(string|int $amount)
 * @method static Money WST(string|int $amount)
 * @method static Money XAF(string|int $amount)
 * @method static Money XAG(string|int $amount)
 * @method static Money XAU(string|int $amount)
 * @method static Money XBA(string|int $amount)
 * @method static Money XBB(string|int $amount)
 * @method static Money XBC(string|int $amount)
 * @method static Money XBD(string|int $amount)
 * @method static Money XBT(string|int $amount)
 * @method static Money XCD(string|int $amount)
 * @method static Money XDR(string|int $amount)
 * @method static Money XOF(string|int $amount)
 * @method static Money XPD(string|int $amount)
 * @method static Money XPF(string|int $amount)
 * @method static Money XPT(string|int $amount)
 * @method static Money XSU(string|int $amount)
 * @method static Money XTS(string|int $amount)
 * @method static Money XUA(string|int $amount)
 * @method static Money XXX(string|int $amount)
 * @method static Money YER(string|int $amount)
 * @method static Money ZAR(string|int $amount)
 * @method static Money ZMW(string|int $amount)
 * @method static Money ZWL(string|int $amount)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
        ),
         'className' => 'Money\\Money',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52ee522f6fabdba12a422f3b690d84cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Convenience factory method for a Money object.
     *
     * <code>
     * $fiveDollar = Money::USD(500);
     * </code>
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return Money
     *
     * @throws \\InvalidArgumentException If amount is not integer(ish)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
        ),
         'className' => 'Money\\Money',
         'functionName' => '__callStatic',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4923fe0030a9fb547d107ec387cc5be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Internal value.
     *
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab80599a43f85344749105b5e184d0d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Currency
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '320244a38430e807527fb8e35fb7d38b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Calculator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51c64db286f2a14a6e14f732b9cd5c16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03678231686d33eb7c4ec81a13fff388' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int|string $amount   Amount, expressed in the smallest units of $currency (eg cents)
     * @param Currency   $currency
     *
     * @throws \\InvalidArgumentException If amount is not integer
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bd1b29841e61dae08c363c5a341ea59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a new Money instance based on the current one using the Currency.
     *
     * @param int|string $amount
     *
     * @return Money
     *
     * @throws \\InvalidArgumentException If amount is not integer
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'newInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '174f995959405081c2404a34069e0323' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether a Money has the same Currency as this.
     *
     * @param Money $other
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'isSameCurrency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c13074b90797d6ff79f2ca77a469dad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a Money has the same currency as this.
     *
     * @param Money $other
     *
     * @throws \\InvalidArgumentException If $other has a different currency
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'assertSameCurrency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f95a51014ffe5c870d05ca31c81ff987' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the value represented by this object equals to the other.
     *
     * @param Money $other
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'equals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '920cd43ea8db1e37c292a0ea0e8154d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an integer less than, equal to, or greater than zero
     * if the value of this object is considered to be respectively
     * less than, equal to, or greater than the other.
     *
     * @param Money $other
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'compare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e91b97887e0ce9d450e41c0bf27c1e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the value represented by this object is greater than the other.
     *
     * @param Money $other
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'greaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56788c72dcb0a065bf4dd2b9076cf51a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \\Money\\Money $other
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'greaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99914326f8083a368293dbcdf1eb211b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the value represented by this object is less than the other.
     *
     * @param Money $other
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'lessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8588d76d39da1c14c9279797ce8628e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \\Money\\Money $other
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'lessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ff7c58c8b50b906d4c95e6b10c17f17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value represented by this object.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'getAmount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd577d1ec504ead3efb6a4c8b6b560dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the currency of this object.
     *
     * @return Currency
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'getCurrency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd28c2dc4af24b7a5d07580239baf3c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a new Money object that represents
     * the sum of this and an other Money object.
     *
     * @param Money[] $addends
     *
     * @return Money
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'add',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f6d64ffda3a96de0106a2874296fb9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a new Money object that represents
     * the difference of this and an other Money object.
     *
     * @param Money[] $subtrahends
     *
     * @return Money
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'subtract',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e239c151f26708b13914f019a9bd039' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the operand is integer or float.
     *
     * @param float|int|string $operand
     *
     * @throws \\InvalidArgumentException If $operand is neither integer nor float
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'assertOperand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc1a7631602835682a92d2be7e78ce71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that rounding mode is a valid integer value.
     *
     * @param int $roundingMode
     *
     * @throws \\InvalidArgumentException If $roundingMode is not valid
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'assertRoundingMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3fc0fa6d11628d70219a8933c5dcdab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a new Money object that represents
     * the multiplied value by the given factor.
     *
     * @param float|int|string $multiplier
     * @param int              $roundingMode
     *
     * @return Money
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'multiply',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3721aa6d095c243af76659d16e0cdf47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a new Money object that represents
     * the divided value by the given factor.
     *
     * @param float|int|string $divisor
     * @param int              $roundingMode
     *
     * @return Money
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'divide',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '155db9a688b4d97c99e3146dc58fa09e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a new Money object that represents
     * the remainder after dividing the value by
     * the given factor.
     *
     * @param Money $divisor
     *
     * @return Money
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'mod',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f5100ab7c2ab983bbec675ad0ba05dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allocate the money according to a list of ratios.
     *
     * @param array $ratios
     *
     * @return Money[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'allocate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f2f7227ad242c8f237e19cc9da330b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allocate the money among N targets.
     *
     * @param int $n
     *
     * @return Money[]
     *
     * @throws \\InvalidArgumentException If number of targets is not an integer
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'allocateTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7edfc20c710333a54ce94e21264023a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Money $money
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'ratioOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75cd4e3df7ebf9ade17b2ac955f8d8df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $amount
     * @param int    $rounding_mode
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'round',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b2fe2a4dacc1e1997814d756cc7403' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Money
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'absolute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e7f56407eed232b53532045c10af1a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Money
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'negative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cea88910bbd386757089bb120ef9fcde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the value represented by this object is zero.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'isZero',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61c3b5331b6b6d39c0951a293a5a0508' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the value represented by this object is positive.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'isPositive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a54ff15b401ad1a57f0fe0f17fdad3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the value represented by this object is negative.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'isNegative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd35a75412a876f96a17180b1c97ab9b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'jsonSerialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce728a20e86c4dc30471f439fccaa748' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Money $first
     * @param Money ...$collection
     *
     * @return Money
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'min',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3853a349299dd5f5680d2f720c48511a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Money $first
     * @param Money ...$collection
     *
     * @return Money
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'max',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f45c789b9c5315d30e669db62ce2702' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Money $first
     * @param Money ...$collection
     *
     * @return Money
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'sum',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92c747b6e7c81a27013e09479b588e21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Money $first
     * @param Money ...$collection
     *
     * @return Money
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'avg',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ca1f3bce830bd9babd85d0dd1d52a26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $calculator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'registerCalculator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '201a883809152c4c77f94e161eb4f29a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Calculator
     *
     * @throws \\RuntimeException If cannot find calculator for money calculations
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'initializeCalculator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07435fae22d4205a3fe8cc46796f952d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Calculator $calculator */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'initializeCalculator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c70ac5f9352ecc28ed99754500d1fa75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Calculator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Money',
         'uses' => 
        array (
          'bcmathcalculator' => 'Money\\Calculator\\BcMathCalculator',
          'gmpcalculator' => 'Money\\Calculator\\GmpCalculator',
          'phpcalculator' => 'Money\\Calculator\\PhpCalculator',
        ),
         'className' => 'Money\\Money',
         'functionName' => 'getCalculator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));