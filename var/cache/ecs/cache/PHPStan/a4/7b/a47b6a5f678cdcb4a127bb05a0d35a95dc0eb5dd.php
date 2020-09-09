<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/ramsey/uuid/src/UuidInterface.php-1597771066',
   'data' => 
  array (
    '48b0809a9a803c050d57f7fb61543816' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A UUID is a universally unique identifier adhering to an agreed-upon
 * representation format and standard for generation
 *
 * @psalm-immutable
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f4ec959b1669e1ab84cd5a5b4f4415b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns -1, 0, or 1 if the UUID is less than, equal to, or greater than
     * the other UUID
     *
     * The first of two UUIDs is greater than the second if the most
     * significant field in which the UUIDs differ is greater for the first
     * UUID.
     *
     * * Q. What\'s the value of being able to sort UUIDs?
     * * A. Use them as keys in a B-Tree or similar mapping.
     *
     * @param UuidInterface $other The UUID to compare
     *
     * @return int -1, 0, or 1 if the UUID is less than, equal to, or greater than $other
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'compareTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e3a01bafe3002f971041e513f2ca6d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the UUID is equal to the provided object
     *
     * The result is true if and only if the argument is not null, is a UUID
     * object, has the same variant, and contains the same value, bit for bit,
     * as the UUID.
     *
     * @param object|null $other An object to test for equality with this UUID
     *
     * @return bool True if the other object is equal to this UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'equals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f859d519e60f2f15fb2806457abbd45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the binary string representation of the UUID
     *
     * @psalm-return non-empty-string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'getBytes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fd94f8c6ebb3186052b74aeb24237a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the fields that comprise this UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'getFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b35debd36a907e48ab4b5e0b0107c7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the hexadecimal representation of the UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'getHex',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '129ea98c999ea5c348f27e344b73fea7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the integer representation of the UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'getInteger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a351627be12c39815d072b040dd818f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the string standard representation of the UUID
     *
     * @psalm-return non-empty-string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => 'toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d338d72b7dac865fceae8d001420d54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Casts the UUID to the string standard representation
     *
     * @psalm-return non-empty-string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'jsonserializable' => 'JsonSerializable',
          'fieldsinterface' => 'Ramsey\\Uuid\\Fields\\FieldsInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'serializable' => 'Serializable',
        ),
         'className' => 'Ramsey\\Uuid\\UuidInterface',
         'functionName' => '__toString',
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