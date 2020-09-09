<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/src/Rating/Domain/MovieRepository.php-1598994064',
   'data' => 
  array (
    'f1ec6ff3cdd6ee3c637bbeec92f1040f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param MovieId $id
     * @return Option<Movie>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Rating\\Domain',
         'uses' => 
        array (
          'movieid' => 'App\\Shared\\MovieId',
          'option' => 'Munus\\Control\\Option',
        ),
         'className' => 'App\\Rating\\Domain\\MovieRepository',
         'functionName' => 'find',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37cd98340fe666e11acbe0e9d4bce302' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Movie $movie
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Rating\\Domain',
         'uses' => 
        array (
          'movieid' => 'App\\Shared\\MovieId',
          'option' => 'Munus\\Control\\Option',
        ),
         'className' => 'App\\Rating\\Domain\\MovieRepository',
         'functionName' => 'save',
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