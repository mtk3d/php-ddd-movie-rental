<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/src/Rent/Domain/Policy/GapBetween.php-1599653490',
   'data' => 
  array (
    'a0d14279efc5643418323d370aedb363' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Period $period
     * @param GenericList<Period> $reservedPeriods
     * @return Either<Rejection, Allowance>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Rent\\Domain\\Policy',
         'uses' => 
        array (
          'policy' => 'App\\Rent\\Domain\\Policy',
          'domainevent' => 'App\\Shared\\DomainEvent',
          'period' => 'League\\Period\\Period',
          'genericlist' => 'Munus\\Collection\\GenericList',
          'either' => 'Munus\\Control\\Either',
          'left' => 'Munus\\Control\\Either\\Left',
          'right' => 'Munus\\Control\\Either\\Right',
        ),
         'className' => 'App\\Rent\\Domain\\Policy\\GapBetween',
         'functionName' => 'isSatisfied',
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