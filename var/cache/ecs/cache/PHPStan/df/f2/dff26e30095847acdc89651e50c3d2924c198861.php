<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/src/Rent/Domain/Policy.php-1599654525',
   'data' => 
  array (
    '8eaae7b6617bb127880ad69a4065751a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Period $period
     * @param GenericList<Period> $reservedPeriods
     * @return Either<Rejection, Allowance>
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