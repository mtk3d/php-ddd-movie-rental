<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/munusphp/munus/src/Value.php-1593246628',
   'data' => 
  array (
    '546ac68997c81d0a5d6a4ed7de57c399' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Value is the basic and most important type of this library. What you need to know about Value:
 *  - it is immutable by default
 *  - it is generic wrapper
 *  - it can be empty
 *  - it can be safely compared with other value.
 *
 * @template T
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8231dc287240c02a2863e7374cbfc841' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks, if the underlying value is absent.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'isEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'd91df2cb4224e42b90ac7953e126df44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * States whether this is a single-valued type.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'isSingleValued',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'b946ee7f0782fc307832869f1e96279d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the underlying value or throw exception if there is no value (e.x. None).
     *
     * @return T
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '02cea40fe384e5f377f74882a53acb45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Maps the underlying value to a different type.
     *
     * @template U
     *
     * @param callable(T): U $mapper
     *
     * @return Value<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '26f270994a2031727880071872ea8ea7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Iterator<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'iterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '0139c8e5166488f70d4ec3defe72b8ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs given action on first element.
     *
     * @param callable(T):void $action
     *
     * @return self<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'peek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'c745fea3ab497204f5730a3de9e206d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run consumer on each element.
     *
     * @param callable(T):void $consumer
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'forEach',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'ff1c2c8e132bf6047d911e2b7238b690' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks, if the given predicate is true for all elements.
     *
     * @param callable(T):bool $predicate
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'forAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'f2b5163f46e2595b96669c2d974de109' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check, if the given element is contained.
     *
     * @param T $element
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'contains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'b2b873e4b11534f7575acc5cc8f39b90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param callable(T):bool $predicate
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '7b3ff44548dd3e8d00d88c7aa68f04c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the underlying value if present, otherwise return $other.
     *
     * @param T $other
     *
     * @return T
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'getOrElse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '3fc219d0179369a1eac5acb426d48391' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the underlying value if present, otherwise returns null.
     *
     * @return T|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'getOrNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'c151e4d021f25571068244773dc9d70a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the underlying value if present, otherwise throws $throwable.
     *
     * @return T
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'getOrElseThrow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '6aa0923d5875423b1e78cbd5baca83a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the underlying value if present, otherwise returns the result of $supplier.
     *
     * @param callable():T $supplier
     *
     * @return T
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'getOrElseTry',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '36b0700c49c7c9b752114330c3b51b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Similar to "==" operator, but also checks congruence of structures and equality of contained values.
     *
     * @param mixed $object
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'equals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    'f7c008ea339c64bc848f3b60dc934179' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Collects the underlying value(s) (if present) using the provided collector.
     *
     * @template R
     *
     * @param Collector<T,R> $collector
     *
     * @return R
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'collect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '93e67cabafa2c8b10689b12ad632164f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Option<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'toOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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
    '861a552fdd281e764965171f224c949c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return Stream<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus',
         'uses' => 
        array (
          'iterator' => 'Munus\\Collection\\Iterator',
          'stream' => 'Munus\\Collection\\Stream',
          'collector' => 'Munus\\Collection\\Stream\\Collector',
          'option' => 'Munus\\Control\\Option',
          'tryto' => 'Munus\\Control\\TryTo',
          'comparator' => 'Munus\\Value\\Comparator',
        ),
         'className' => 'Munus\\Value',
         'functionName' => 'toStream',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Value',
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