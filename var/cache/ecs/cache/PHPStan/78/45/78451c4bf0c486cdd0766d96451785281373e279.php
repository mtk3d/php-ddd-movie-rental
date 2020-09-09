<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/munusphp/munus/src/Collection/GenericList.php-1593246628',
   'data' => 
  array (
    '1884db7408f0cb3eaa911aa1417e2193' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template T
 * @extends Sequence<T>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff6de3a3afb581c780ed27e28f0b5b95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param U ...$elements
     *
     * @return GenericList<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'of',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '0223f7539257b3c2d9b512f6d41dd00f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param iterable<U> $elements
     *
     * @return GenericList<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'ofAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '539e52ccde6bea4feda40c245f51bfed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return GenericList<int>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'range',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '7a695fb34e8acc1c313b9117e569ca02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template U
     *
     * @param callable(T):U $mapper
     *
     * @return GenericList<U>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '720ec629d69794784d2658dadb267c97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param callable(T):bool $predicate
     *
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '954ed4eefff8474020016392692eb233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var GenericList<T> $filtered */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeArgumentStrategy::__set_state(array(
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
    '63da4bbf3cb21abc9d314236f44e7471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param callable(T):bool $predicate
     *
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'dropWhile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '8d0e01cfb3c669128ca99bcf286455d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var GenericList<T> $list */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'dropWhile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeArgumentStrategy::__set_state(array(
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
    '88d1b175d3f9aa1bcc1195bda2683f06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'take',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    'fc419a414bb82068d0e5afcf5664a236' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var GenericList<T> $result */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'take',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeArgumentStrategy::__set_state(array(
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
    'a913a38dbb4b2da7b477ac43de896033' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'drop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '04958bef4803855f35c85ec43af5d941' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var GenericList<T> $list */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'drop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
                 'functionName' => NULL,
              )),
               'name' => 'T',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeArgumentStrategy::__set_state(array(
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
    'e385fd7cb160f41f07361be0939dcf45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param T $element
     *
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'prepend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '6ec09fcb431fdf0c011ed1f6ad2f75ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param T $element
     *
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'append',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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
    '87fe2298ded154841f84468ecef4835a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return GenericList<T>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Munus\\Collection',
         'uses' => 
        array (
          'cons' => 'Munus\\Collection\\GenericList\\Cons',
          'nil' => 'Munus\\Collection\\GenericList\\Nil',
        ),
         'className' => 'Munus\\Collection\\GenericList',
         'functionName' => 'reverse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Munus\\Collection\\GenericList',
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