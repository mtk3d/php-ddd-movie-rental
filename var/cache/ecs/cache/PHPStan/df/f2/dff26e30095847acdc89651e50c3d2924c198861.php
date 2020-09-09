<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/src/Rent/Domain/Policy.php-1599653514',
   'data' => 
  array (
    '404f59fdcf1180e65cd3cf95bc73ecfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Period $period
     * @param GenericList<Period> $reservedPeriods
     * @return Either<Allowance, Rejection>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Rent\\Domain',
         'uses' => 
        array (
          'allowance' => 'App\\Rent\\Domain\\Policy\\Allowance',
          'rejection' => 'App\\Rent\\Domain\\Policy\\Rejection',
          'period' => 'League\\Period\\Period',
          'genericlist' => 'Munus\\Collection\\GenericList',
          'either' => 'Munus\\Control\\Either',
        ),
         'className' => 'App\\Rent\\Domain\\Policy',
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