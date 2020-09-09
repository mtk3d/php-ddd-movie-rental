<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/munusphp/munus/src/Control/Option.php-1593246628',
   'data' => 
  array (
    '6649ad9ef77b80e9525b752701ce1655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template T
 * @extends Value<T>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '225af8765514d6144c3e62f21dbdefac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param ?U $value
     *
     * @return Option<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => 'of',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Control\\Option',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '15637db90330e3868b0d921698c92a81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param U $value
     *
     * @return Option<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => 'some',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Control\\Option',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '781cfbb68f54e9c3360144648d551e65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @phpstan-return Option<T>
     * @psalm-return Option<none>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => 'none',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Control\\Option',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'c81de42e69997ca78ab5e87c1784f46e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param U $value
     *
     * @return Option<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => 'when',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Control\\Option',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '27a37f60d590252b1d4a777a224f3ee8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param callable(T):U $mapper
     *
     * @return Option<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Control\\Option',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'e7790467f3db9a9049c706a5ee7c1401' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Iterator<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Control',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'none' => 'Munus\\Control\\Option\\None',
          'some' => 'Munus\\Control\\Option\\Some',
          'value' => 'Munus\\Value',
        ),
         'className' => 'Munus\\Control\\Option',
         'functionName' => 'iterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Control\\Option',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
  ),
));