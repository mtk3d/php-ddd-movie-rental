<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/ramsey/uuid/src/UuidFactoryInterface.php-1597771066',
   'data' => 
  array (
    '66105f22090510ee0abfc252e3028322' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * UuidFactoryInterface defines common functionality all `UuidFactory` instances
 * must implement
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '003b5e112c26073ea3a28275b3a302ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the validator to use for the factory
     *
     * @psalm-mutation-free
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'getValidator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce039bc4549faa39c306c2e0982869c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a version 1 (time-based) UUID from a host ID, sequence number,
     * and the current time
     *
     * @param Hexadecimal|int|string|null $node A 48-bit number representing the
     *     hardware address; this number may be represented as an integer or a
     *     hexadecimal string
     * @param int|null $clockSeq A 14-bit number used to help avoid duplicates
     *     that could arise when the clock is set backwards in time or if the
     *     node ID changes
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 1 UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'uuid1',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bb8d72a92c5129a8fb18987609e2e8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a version 2 (DCE Security) UUID from a local domain, local
     * identifier, host ID, clock sequence, and the current time
     *
     * @param int $localDomain The local domain to use when generating bytes,
     *     according to DCE Security
     * @param IntegerObject|null $localIdentifier The local identifier for the
     *     given domain; this may be a UID or GID on POSIX systems, if the local
     *     domain is person or group, or it may be a site-defined identifier
     *     if the local domain is org
     * @param Hexadecimal|null $node A 48-bit number representing the hardware
     *     address
     * @param int|null $clockSeq A 14-bit number used to help avoid duplicates
     *     that could arise when the clock is set backwards in time or if the
     *     node ID changes
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 2 UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'uuid2',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f28607093662b8296aa22119f10c8502' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a version 3 (name-based) UUID based on the MD5 hash of a
     * namespace ID and a name
     *
     * @param string|UuidInterface $ns The namespace (must be a valid UUID)
     * @param string $name The name to use for creating a UUID
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 3 UUID
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'uuid3',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06b9580ab9d2c6e2f814c63429af8587' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a version 4 (random) UUID
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 4 UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'uuid4',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49df48b64384be51dccbd4e94cd3dc39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a version 5 (name-based) UUID based on the SHA-1 hash of a
     * namespace ID and a name
     *
     * @param string|UuidInterface $ns The namespace (must be a valid UUID)
     * @param string $name The name to use for creating a UUID
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 5 UUID
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'uuid5',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5e2d9b646d3e42800dadabdf0e0b0ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a version 6 (ordered-time) UUID from a host ID, sequence number,
     * and the current time
     *
     * @param Hexadecimal|null $node A 48-bit number representing the hardware
     *     address
     * @param int|null $clockSeq A 14-bit number used to help avoid duplicates
     *     that could arise when the clock is set backwards in time or if the
     *     node ID changes
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 6 UUID
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'uuid6',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1404347e6e60254de6625a3a2745fed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a UUID from a byte string
     *
     * @param string $bytes A binary string
     *
     * @return UuidInterface A UuidInterface instance created from a binary
     *     string representation
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'fromBytes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a888b73cc3e90714e256960bc192b34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a UUID from the string standard representation
     *
     * @param string $uuid A hexadecimal string
     *
     * @return UuidInterface A UuidInterface instance created from a hexadecimal
     *     string representation
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'fromString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75ab1d3a795b0bd4917b4c915d7195ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a UUID from a 128-bit integer string
     *
     * @param string $integer String representation of 128-bit integer
     *
     * @return UuidInterface A UuidInterface instance created from the string
     *     representation of a 128-bit integer
     *
     * @psalm-pure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'fromInteger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2dbc049b0d2acfe95accae16784be6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a UUID from a DateTimeInterface instance
     *
     * @param DateTimeInterface $dateTime The date and time
     * @param Hexadecimal|null $node A 48-bit number representing the hardware
     *     address
     * @param int|null $clockSeq A 14-bit number used to help avoid duplicates
     *     that could arise when the clock is set backwards in time or if the
     *     node ID changes
     *
     * @return UuidInterface A UuidInterface instance that represents a
     *     version 1 UUID created from a DateTimeInterface instance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ramsey\\Uuid',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'hexadecimal' => 'Ramsey\\Uuid\\Type\\Hexadecimal',
          'integerobject' => 'Ramsey\\Uuid\\Type\\Integer',
          'validatorinterface' => 'Ramsey\\Uuid\\Validator\\ValidatorInterface',
        ),
         'className' => 'Ramsey\\Uuid\\UuidFactoryInterface',
         'functionName' => 'fromDateTime',
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