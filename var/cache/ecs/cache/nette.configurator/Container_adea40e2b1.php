<?php
// source: phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/conf/config.neon
// source: phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/conf/config.level4.neon
// source: /Users/mateuszcholewka/Sites/MovieRental/phpstan.neon
// source: phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/src/PhpDoc/../../conf/config.stubValidator.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_adea40e2b1 extends _HumbugBox71425477b33d\Nette\DI\Container
{
	protected $tags = [
		'phpstan.phpDoc.typeNodeResolverExtension' => ['020' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['066' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => ['067' => true, '070' => true, '0128' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0104' => true,
			'0105' => true,
			'0106' => true,
			'0107' => true,
			'0108' => true,
			'0109' => true,
			'0110' => true,
			'0111' => true,
			'0112' => true,
			'0116' => true,
			'0118' => true,
			'0119' => true,
			'0121' => true,
			'0122' => true,
			'0123' => true,
			'0124' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0129' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0143' => true,
			'0144' => true,
			'0145' => true,
			'0166' => true,
			'0167' => true,
			'0169' => true,
			'0170' => true,
			'0171' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0100' => true,
			'0117' => true,
			'0130' => true,
			'0131' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0163' => true,
			'0164' => true,
			'0165' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => ['0113' => true, '0115' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0114' => true,
			'0120' => true,
			'0129' => true,
			'0168' => true,
		],
		'phpstan.rules.rule' => [
			'0176' => true,
			'0177' => true,
			'0178' => true,
			'0180' => true,
			'0181' => true,
			'0182' => true,
			'0184' => true,
			'0185' => true,
			'0186' => true,
			'0187' => true,
			'0188' => true,
			'0189' => true,
			'0190' => true,
			'0192' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'0220' => true,
			'0221' => true,
			'0222' => true,
			'0223' => true,
			'0224' => true,
			'0225' => true,
			'0226' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.45' => true,
			'rules.46' => true,
			'rules.47' => true,
			'rules.48' => true,
			'rules.49' => true,
			'rules.5' => true,
			'rules.50' => true,
			'rules.51' => true,
			'rules.52' => true,
			'rules.53' => true,
			'rules.54' => true,
			'rules.55' => true,
			'rules.56' => true,
			'rules.57' => true,
			'rules.58' => true,
			'rules.59' => true,
			'rules.6' => true,
			'rules.60' => true,
			'rules.61' => true,
			'rules.62' => true,
			'rules.63' => true,
			'rules.64' => true,
			'rules.65' => true,
			'rules.66' => true,
			'rules.67' => true,
			'rules.68' => true,
			'rules.69' => true,
			'rules.7' => true,
			'rules.70' => true,
			'rules.71' => true,
			'rules.72' => true,
			'rules.73' => true,
			'rules.74' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_HumbugBox71425477b33d\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_HumbugBox71425477b33d\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			0 => [
				'086',
				'0176',
				'0177',
				'0178',
				'0179',
				'0180',
				'0181',
				'0182',
				'0183',
				'0184',
				'0185',
				'0186',
				'0187',
				'0188',
				'0189',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0198',
				'0199',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
				'0220',
				'0221',
				'0222',
				'0223',
				'0224',
				'0225',
				'0226',
				'0227',
				'0228',
			],
			2 => [
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
				'rules.45',
				'rules.46',
				'rules.47',
				'rules.48',
				'rules.49',
				'rules.50',
				'rules.51',
				'rules.52',
				'rules.53',
				'rules.54',
				'rules.55',
				'rules.56',
				'rules.57',
				'rules.58',
				'rules.59',
				'rules.60',
				'rules.61',
				'rules.62',
				'rules.63',
				'rules.64',
				'rules.65',
				'rules.66',
				'rules.67',
				'rules.68',
				'rules.69',
				'rules.70',
				'rules.71',
				'rules.72',
				'rules.73',
				'rules.74',
			],
		],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [2 => ['rules.4']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [2 => ['rules.6']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Classes\InstantiationRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Classes\NewStaticRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [2 => ['rules.14']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [2 => ['rules.15']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [2 => ['rules.16']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [2 => ['rules.17']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [2 => ['rules.18']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [2 => ['rules.19']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [2 => ['rules.20']],
		'PHPStan\Rules\Variables\UnsetRule' => [2 => ['rules.21']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [2 => ['rules.22']],
		'PHPStan\Rules\Constants\ConstantRule' => [2 => ['rules.23']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [2 => ['rules.24']],
		'PHPStan\Rules\Variables\VariableCertaintyInIssetRule' => [2 => ['rules.25']],
		'PHPStan\Rules\Cast\EchoRule' => [2 => ['rules.26']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [2 => ['rules.27']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [2 => ['rules.28']],
		'PHPStan\Rules\Cast\PrintRule' => [2 => ['rules.29']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [2 => ['rules.30']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [2 => ['rules.31']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [2 => ['rules.32']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [2 => ['rules.33']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [2 => ['rules.34']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [2 => ['rules.35']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [2 => ['rules.36']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [2 => ['rules.37']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [2 => ['rules.38']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [2 => ['rules.39']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [2 => ['rules.40']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [2 => ['rules.41']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [2 => ['rules.42']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [2 => ['rules.43']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [2 => ['rules.44']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [2 => ['rules.45']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [2 => ['rules.46']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [2 => ['rules.47']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [2 => ['rules.48']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [2 => ['rules.49']],
		'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule' => [2 => ['rules.50']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [2 => ['rules.51']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [2 => ['rules.52']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [2 => ['rules.53']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [2 => ['rules.54']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [2 => ['rules.55']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [2 => ['rules.56']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [2 => ['rules.57']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [2 => ['rules.58']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [2 => ['rules.59']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [2 => ['rules.60']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [2 => ['rules.61']],
		'PHPStan\Rules\Variables\ThrowTypeRule' => [2 => ['rules.62']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [2 => ['rules.63']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [2 => ['rules.64']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [2 => ['rules.65']],
		'PHPStan\Rules\DeadCode\NoopRule' => [2 => ['rules.66']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [2 => ['rules.67']],
		'PHPStan\Rules\Exceptions\DeadCatchRule' => [2 => ['rules.68']],
		'PHPStan\Rules\Functions\CallToFunctionStamentWithoutSideEffectsRule' => [2 => ['rules.69']],
		'PHPStan\Rules\Methods\CallToMethodStamentWithoutSideEffectsRule' => [2 => ['rules.70']],
		'PHPStan\Rules\Methods\CallToStaticMethodStamentWithoutSideEffectsRule' => [2 => ['rules.71']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [2 => ['rules.72']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [2 => ['rules.73']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [2 => ['rules.74']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeTraverserInterface' => [['03']],
		'PhpParser\NodeTraverser' => [['03']],
		'PhpParser\NodeVisitorAbstract' => [['04', '05', '039', '049', '057']],
		'PhpParser\NodeVisitor' => [['04', '05', '039', '049', '057']],
		'PhpParser\NodeVisitor\NameResolver' => [['04']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['05']],
		'PhpParser\ParserAbstract' => [['06']],
		'PhpParser\Parser' => [0 => ['06'], 2 => [1 => 'phpParserDecorator']],
		'PhpParser\Parser\Php7' => [['06']],
		'PhpParser\PrettyPrinterAbstract' => [['07']],
		'PhpParser\PrettyPrinter\Standard' => [['07']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['08']],
		'PHPStan\Php\PhpVersion' => [['09']],
		'PHPStan\Php\PhpVersionFactory' => [['010']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['011']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['012']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['013']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['014']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['015']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['016']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['017']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['018']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['019']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['020']],
		'PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension' => [['020']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['021']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['022']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['023']],
		'PHPStan\PhpDoc\StubValidator' => [['024']],
		'PHPStan\Analyser\Analyser' => [['025']],
		'PHPStan\Analyser\FileAnalyser' => [['026']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['027']],
		'PHPStan\Analyser\ScopeFactory' => [['028']],
		'PHPStan\Analyser\LazyScopeFactory' => [['028']],
		'PHPStan\Analyser\NodeScopeResolver' => [['029']],
		'PHPStan\Analyser\ResultCache\ResultCacheManager' => [['030']],
		'PHPStan\Cache\Cache' => [['031']],
		'PHPStan\Command\AnalyseApplication' => [['032']],
		'PHPStan\Command\AnalyserRunner' => [['033']],
		'PHPStan\Command\IgnoredRegexValidator' => [['034']],
		'PHPStan\Dependency\DependencyDumper' => [['035']],
		'PHPStan\Dependency\DependencyResolver' => [['036']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['037']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['038']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['039']],
		'PHPStan\DependencyInjection\Container' => [['040'], ['041']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['041']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['042']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['043']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['044']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['045']],
		'PHPStan\File\FileHelper' => [['046']],
		'PHPStan\File\FileExcluder' => [['047']],
		'PHPStan\File\FileFinder' => [['048']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['049']],
		'PHPStan\Parallel\ParallelAnalyser' => [['050']],
		'PHPStan\Parallel\Scheduler' => [['051']],
		'PHPStan\Parser\Parser' => [0 => ['052'], 2 => [1 => 'directParser']],
		'PHPStan\Parser\CachedParser' => [['052']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['053']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['054']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['055', '066', '068']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['055']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['056', '067', '068', '070', '0128']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['056']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['057']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['058']],
		'_HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['059'],
			2 => [1 => 'betterReflectionSourceLocator', 'stubSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['059']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['060']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['061']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['062']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['063']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['064']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['065']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['066']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['067']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['068']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['069']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['070', '0167']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['070']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['071']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['072']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['073']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['074']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['075']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['076']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['077']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['078']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['079']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['080']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['081']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['082']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['083']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['084']],
		'PHPStan\Rules\IssetCheck' => [['085']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['086']],
		'PHPStan\Rules\MissingTypehintCheck' => [['087']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['088']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['088']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['089']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['090']],
		'PHPStan\Rules\RegistryFactory' => [['091']],
		'PHPStan\Rules\RuleLevelHelper' => [['092']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['093']],
		'PHPStan\Type\FileTypeMapper' => [['094']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'095',
				'096',
				'097',
				'098',
				'099',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0107',
				'0108',
				'0109',
				'0110',
				'0111',
				'0112',
				'0116',
				'0118',
				'0119',
				'0121',
				'0122',
				'0123',
				'0124',
				'0125',
				'0126',
				'0127',
				'0129',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0166',
				'0167',
				'0169',
				'0170',
				'0171',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['095']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['096']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['097']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['098']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['099']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0100',
				'0117',
				'0130',
				'0131',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0163',
				'0164',
				'0165',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0100',
				'0117',
				'0130',
				'0131',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0163',
				'0164',
				'0165',
				'0167',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0100']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0101']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0102']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0103']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0104']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0105']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0106']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0107']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0108']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0109']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0110']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0111']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0112']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0113', '0115']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0113']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [['0114', '0120', '0129', '0168']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0114']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0115']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0117']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0118']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0119']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0121']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0122']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0123']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0124']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0128']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0130']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0131']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0135']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0137']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0138']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0139']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0141']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0142']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0143']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0144']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0146']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0147']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0148']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0149']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0150']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0151']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0152']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0153']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0154']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0155']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0156']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0157']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0158']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0159']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0160']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0161']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0162']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0163']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0164']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0165']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0166']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0167']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0169']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0170']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0171']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [0 => ['relativePathHelper'], 2 => [1 => 'simpleRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 3 => 'runtimeReflectionProvider', 5 => 'stubBetterReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\DirectParser' => [2 => ['directParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [['phpParserLexer']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [
			0 => ['reflectionProvider'],
			2 => [1 => 'betterReflectionProvider', 'stubBetterReflectionProvider'],
		],
		'_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector', 'stubClassReflector'],
		],
		'_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\Reflector' => [
			2 => [
				'betterReflectionClassReflector',
				'nodeScopeResolverClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'stubClassReflector',
				'stubFunctionReflector',
				'stubConstantReflector',
			],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector' => [
			2 => ['betterReflectionClassReflector'],
		],
		'_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\FunctionReflector' => [
			2 => ['betterReflectionFunctionReflector', 'stubFunctionReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector' => [
			2 => ['betterReflectionFunctionReflector'],
		],
		'_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ConstantReflector' => [
			2 => ['betterReflectionConstantReflector', 'stubConstantReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector' => [
			2 => ['betterReflectionConstantReflector'],
		],
		'Hoa\Compiler\Llk\Parser' => [['regexParser']],
		'Hoa\File\File' => [['regexGrammarStream']],
		'Hoa\File\Generic' => [['regexGrammarStream']],
		'Hoa\Stream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Stream' => [['regexGrammarStream']],
		'Hoa\Event\Listenable' => [['regexGrammarStream']],
		'Hoa\Event\Source' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pathable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Statable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Touchable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Bufferable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Lockable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pointable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\In' => [['regexGrammarStream']],
		'Hoa\File\Read' => [['regexGrammarStream']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0172']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0173']],
		'_HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [
			1 => ['0174', '0175'],
		],
		'_HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [
			['0174'],
		],
		'_HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0175']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.baselineNeon',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter' => [['errorFormatter.baselineNeon']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0176']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0177']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0178']],
		'PHPStan\Rules\Functions\ClosureUsesThisRule' => [['0179']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0180']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0181']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0182']],
		'PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule' => [['0183']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0184']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0185']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0186']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0187']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0188']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0189']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0190']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0191']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0192']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0193']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0194']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0195']],
		'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule' => [['0196']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0197']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['0198']],
		'PHPStan\Rules\Variables\VariableCertaintyNullCoalesceRule' => [['0199']],
		'PHPStan\Rules\Classes\MixinRule' => [['0200']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0201']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0202']],
		'PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule' => [['0203']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0204']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0205']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0206']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['0207']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0208']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0209']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0210']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0211']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0212']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0213']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['0214']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['0215']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0216']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0217']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0218']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0219']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0220']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0221']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0222']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0223']],
		'PHPStan\Rules\Comparison\UnreachableIfBranchesRule' => [['0224']],
		'PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule' => [['0225']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0226']],
		'PHPStan\Rules\Variables\IssetRule' => [['0227']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['0228']],
		'PHPStan\PhpDoc\StubSourceLocatorFactory' => [['0229']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrap' => null,
			'bootstrapFiles' => [
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/runtime/ReflectionUnionType.php',
			],
			'excludes_analyse' => [],
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => 4,
			'paths' => ['/Users/mateuszcholewka/Sites/MovieRental/src', '/Users/mateuszcholewka/Sites/MovieRental/tests'],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => false,
				'closureUsesThis' => false,
				'randomIntParameters' => false,
				'nullCoalesce' => false,
				'fileWhitespace' => false,
				'unusedClassElements' => false,
				'readComposerPhpVersion' => false,
			],
			'fileExtensions' => ['php'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => true,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => true,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => false,
			'checkThisOnly' => false,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingClosureNativeReturnTypehintRule' => false,
			'checkMissingTypehints' => true,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => true,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 60.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 1024],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs/.memory_limit',
			'staticReflectionClassNamePatterns' => ['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
			],
			'customRulesetUsed' => false,
			'missingClosureNativeReturnCheckObjectTypehint' => false,
			'tmpDir' => '/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs',
			'rootDir' => '/Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/mateuszcholewka/Sites/MovieRental',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/conf/config.level4.neon',
				'/Users/mateuszcholewka/Sites/MovieRental/phpstan.neon',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/src/PhpDoc/../../conf/config.stubValidator.neon',
			],
			'analysedPaths' => ['/Users/mateuszcholewka/Sites/MovieRental/src'],
			'composerAutoloaderProjectPaths' => [
				'/Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/..',
				'/Users/mateuszcholewka/Sites/MovieRental',
			],
			'analysedPathsFromConfig' => [],
			'allCustomConfigFiles' => ['/Users/mateuszcholewka/Sites/MovieRental/phpstan.neon'],
			'usedLevel' => '4',
			'cliAutoloadFile' => null,
			'singleReflectionFile' => null,
			'__parametersSchema' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'bootstrapFiles' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_directories' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'featureToggles' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'bleedingEdge' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'disableRuntimeReflectionProvider' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'closureUsesThis' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'randomIntParameters' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nullCoalesce' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'fileWhitespace' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'unusedClassElements' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'readComposerPhpVersion' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'fileExtensions' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixed' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkGenericClassInNonGenericObjectType' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkInternalClassCaseSensitivity' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingIterableValueType' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingVarTagTypehint' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMethodSignatures' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExtraArguments' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingClosureNativeReturnTypehintRule' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingTypehints' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkTooWideReturnTypesInProtectedAndPublicMethods' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUninitializedProperties' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tipsOfTheDay' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'parallel' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'jobSize' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'processTimeout' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'float',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'maximumNumberOfProcesses' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'minimumNumberOfJobsPerProcess' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'buffer' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'phpVersion' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\AnyOf', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [70100.0, 80000.0],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysWrittenTags' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysReadTags' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConstructors' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'treatPhpDocTypesAsCertain' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\AnyOf', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
								\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'count' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
													null,
													null,
												],
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [
												null,
												null,
											],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Structure', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'typeAliases' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'stubFiles' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingFunctionCalls' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'staticReflectionClassNamePatterns' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'mixinExcludeClasses' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanFiles' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanDirectories' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConfigFiles' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'allCustomConfigFiles' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPaths' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'composerAutoloaderProjectPaths' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPathsFromConfig' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'usedLevel' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliAutoloadFile' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionFile' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'missingClosureNativeReturnCheckObjectTypehint' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'__parametersSchema' => \_HumbugBox71425477b33d\Nette\PhpGenerator\Dumper::createObject('_HumbugBox71425477b33d\Nette\Schema\Elements\Type', [
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00type" => '_HumbugBox71425477b33d\Nette\Schema\Schema',
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00_HumbugBox71425477b33d\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('09'));
	}


	public function createService03(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('04'));
		$service->addVisitor($this->getService('05'));
		$service->addVisitor($this->getService('049'));
		return $service;
	}


	public function createService04(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver;
	}


	public function createService05(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService06(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('phpParserLexer'));
	}


	public function createService07(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService08(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('046'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService09(): PHPStan\Php\PhpVersion
	{
		return $this->getService('010')->create();
	}


	public function createService010(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('011')->create();
	}


	public function createService011(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			null,
			false,
			['/Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/..', '/Users/mateuszcholewka/Sites/MovieRental']
		);
	}


	public function createService012(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService013(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('014'));
	}


	public function createService014(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService015(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('013'), $this->getService('014'));
	}


	public function createService016(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('094'));
	}


	public function createService017(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('021'), $this->getService('019'));
	}


	public function createService018(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('012'), $this->getService('015'));
	}


	public function createService019(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService020(): PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension
	{
		return new PHPStan\PhpDoc\TypeAlias\TypeAliasesTypeNodeResolverExtension(
			$this->getService('023'),
			$this->getService('reflectionProvider'),
			[]
		);
	}


	public function createService021(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver($this->getService('022'), $this->getService('040'));
	}


	public function createService022(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('040'));
	}


	public function createService023(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('012'), $this->getService('013'), $this->getService('021'));
	}


	public function createService024(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator(
			[
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			$this->getService('042')
		);
	}


	public function createService025(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('026'), $this->getService('registry'), $this->getService('029'), 50);
	}


	public function createService026(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('028'),
			$this->getService('029'),
			$this->getService('052'),
			$this->getService('036'),
			true
		);
	}


	public function createService027(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper($this->getService('034'), $this->getService('046'), [], true);
	}


	public function createService028(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('040'));
	}


	public function createService029(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverClassReflector'),
			$this->getService('043'),
			$this->getService('052'),
			$this->getService('094'),
			$this->getService('016'),
			$this->getService('046'),
			$this->getService('typeSpecifier'),
			true,
			false,
			true,
			[],
			[]
		);
	}


	public function createService030(): PHPStan\Analyser\ResultCache\ResultCacheManager
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheManager(
			$this->getService('037'),
			'/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs/resultCache.php',
			['/Users/mateuszcholewka/Sites/MovieRental/phpstan.neon'],
			['/Users/mateuszcholewka/Sites/MovieRental/src'],
			['/Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/..', '/Users/mateuszcholewka/Sites/MovieRental'],
			[
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			],
			'4',
			null
		);
	}


	public function createService031(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService032(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('033'),
			$this->getService('024'),
			$this->getService('030'),
			$this->getService('027'),
			'/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs/.memory_limit',
			50
		);
	}


	public function createService033(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner($this->getService('051'), $this->getService('025'), $this->getService('050'));
	}


	public function createService034(): PHPStan\Command\IgnoredRegexValidator
	{
		return new PHPStan\Command\IgnoredRegexValidator($this->getService('regexParser'), $this->getService('023'));
	}


	public function createService035(): PHPStan\Dependency\DependencyDumper
	{
		return new PHPStan\Dependency\DependencyDumper(
			$this->getService('036'),
			$this->getService('029'),
			$this->getService('052'),
			$this->getService('028'),
			$this->getService('048')
		);
	}


	public function createService036(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('046'),
			$this->getService('reflectionProvider'),
			$this->getService('038')
		);
	}


	public function createService037(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('phpParserDecorator'), $this->getService('039'));
	}


	public function createService038(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('094'), $this->getService('07'));
	}


	public function createService039(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('038'));
	}


	public function createService040(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('041'));
	}


	public function createService041(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService042(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/mateuszcholewka/Sites/MovieRental',
			'/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs',
			[
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/conf/config.level4.neon',
				'/Users/mateuszcholewka/Sites/MovieRental/phpstan.neon',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/src/PhpDoc/../../conf/config.stubValidator.neon',
			],
			['/Users/mateuszcholewka/Sites/MovieRental/src'],
			['/Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/..', '/Users/mateuszcholewka/Sites/MovieRental'],
			[],
			['/Users/mateuszcholewka/Sites/MovieRental/phpstan.neon'],
			'4'
		);
	}


	public function createService043(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('040'));
	}


	public function createService044(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('040'));
	}


	public function createService045(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('040'));
	}


	public function createService046(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/mateuszcholewka/Sites/MovieRental');
	}


	public function createService047(): PHPStan\File\FileExcluder
	{
		return new PHPStan\File\FileExcluder(
			$this->getService('046'),
			[],
			[
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createService048(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('047'), $this->getService('046'), ['php']);
	}


	public function createService049(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService050(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 60.0, 134217728);
	}


	public function createService051(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService052(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('directParser'), 1024);
	}


	public function createService053(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService054(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_adea40e2b1 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('052'),
					$this->container->getService('053'),
					$this->container->getService('031'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename
				);
			}
		};
	}


	public function createService055(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService056(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService057(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService058(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('057'),
			$this->getService('phpParserDecorator')
		);
	}


	public function createService059(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('058'));
	}


	public function createService060(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('062'),
			$this->getService('065'),
			$this->getService('063')
		);
	}


	public function createService061(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory {
			private $container;


			public function __construct(Container_adea40e2b1 $container)
			{
				$this->container = $container;
			}


			public function create(string $directory): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocator(
					$this->container->getService('058'),
					$this->container->getService('048'),
					$directory
				);
			}
		};
	}


	public function createService062(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('061'));
	}


	public function createService063(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_adea40e2b1 $container)
			{
				$this->container = $container;
			}


			public function create(_HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('065'));
			}
		};
	}


	public function createService064(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_adea40e2b1 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('058'),
					$fileName
				);
			}
		};
	}


	public function createService065(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('064'));
	}


	public function createService066(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService067(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService068(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('028'),
			$this->getService('029'),
			$this->getService('069'),
			$this->getService('016'),
			$this->getService('055'),
			$this->getService('056'),
			$this->getService('074'),
			$this->getService('052'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('reflectionProvider'),
			true,
			['stdClass']
		);
	}


	public function createService069(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_adea40e2b1 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $stubPhpDocString
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('052'),
					$this->container->getService('053'),
					$this->container->getService('031'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$stubPhpDocString
				);
			}
		};
	}


	public function createService070(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass']);
	}


	public function createService071(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('040'));
	}


	public function createService072(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider($this->getService('074'));
	}


	public function createService073(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('023'));
	}


	public function createService074(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProvider($this->getService('073'), $this->getService('09'));
	}


	public function createService075(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'));
	}


	public function createService076(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('077'), true);
	}


	public function createService077(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService078(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck($this->getService('092'), false, false, true, true);
	}


	public function createService079(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			$this->getService('09'),
			true,
			false
		);
	}


	public function createService080(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('092'));
	}


	public function createService081(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('082'),
			$this->getService('084'),
			true
		);
	}


	public function createService082(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService083(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck($this->getService('reflectionProvider'), $this->getService('075'), [], true);
	}


	public function createService084(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService085(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('089'), $this->getService('090'));
	}


	public function createService086(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService087(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck($this->getService('reflectionProvider'), true, true);
	}


	public function createService088(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('040'));
	}


	public function createService089(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService090(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService091(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('040'));
	}


	public function createService092(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, false, false);
	}


	public function createService093(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck;
	}


	public function createService094(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('071'),
			$this->getService('052'),
			$this->getService('018'),
			$this->getService('017'),
			$this->getService('031'),
			$this->getService('08')
		);
	}


	public function createService095(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService096(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
	}


	public function createService097(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService098(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService099(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0100(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0101(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0102(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0103(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService0104(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0105(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0106(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0107(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0108(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0109(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0110(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0111(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0112(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0113(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0114(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0115(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0116(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0117(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0118(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0119(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0120(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0122(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
	}


	public function createService0123(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0124(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0125(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0126(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0127(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0128(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0129(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0131(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('090'));
	}


	public function createService0132(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0136(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
	}


	public function createService0138(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0141(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0142(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0143(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0144(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0145(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0146(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0147(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0148(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0149(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0150(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0151(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0152(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0153(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0154(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0155(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0156(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0130'));
	}


	public function createService0157(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0158(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0159(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0160(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0161(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService0162(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0163(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0164(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0165(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0166(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0167(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(true);
	}


	public function createService0168(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0171(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0172(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('0174'),
			$this->getService('0175'),
			$this->getService('065'),
			$this->getService('062'),
			$this->getService('060'),
			$this->getService('059'),
			$this->getService('040'),
			[],
			[],
			[],
			[],
			['/Users/mateuszcholewka/Sites/MovieRental/src'],
			['/Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/..', '/Users/mateuszcholewka/Sites/MovieRental'],
			[],
			$this->parameters['singleReflectionFile'],
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#']
		);
	}


	public function createService0173(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_adea40e2b1 $container)
			{
				$this->container = $container;
			}


			public function create(
				_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\FunctionReflector $functionReflector,
				_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ClassReflector $classReflector,
				_HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ConstantReflector $constantReflector
			): PHPStan\Reflection\BetterReflection\BetterReflectionProvider {
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('071'),
					$this->container->getService('043'),
					$classReflector,
					$this->container->getService('094'),
					$this->container->getService('072'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('054'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('08'),
					$this->container->getService('07'),
					$this->container->getService('046'),
					$functionReflector,
					$constantReflector
				);
			}
		};
	}


	public function createService0174(): _HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return new _HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber($this->getService('phpParserDecorator'));
	}


	public function createService0175(): _HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new _HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0176(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			true
		);
	}


	public function createService0177(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			true
		);
	}


	public function createService0178(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0179(): PHPStan\Rules\Functions\ClosureUsesThisRule
	{
		return new PHPStan\Rules\Functions\ClosureUsesThisRule;
	}


	public function createService0180(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule(
			$this->getService('reflectionProvider'),
			$this->getService('078'),
			$this->getService('092'),
			false,
			true
		);
	}


	public function createService0181(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule(
			$this->getService('reflectionProvider'),
			$this->getService('078'),
			$this->getService('092'),
			$this->getService('075'),
			false,
			true
		);
	}


	public function createService0182(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule($this->getService('09'), $this->getService('086'), true);
	}


	public function createService0183(): PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule
	{
		return new PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule(false);
	}


	public function createService0184(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, true);
	}


	public function createService0185(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			false
		);
	}


	public function createService0186(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			false
		);
	}


	public function createService0187(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(false);
	}


	public function createService0188(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('092'),
			true
		);
	}


	public function createService0189(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('092'),
			$this->getService('075')
		);
	}


	public function createService0190(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			true,
			false
		);
	}


	public function createService0191(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('088'), []);
	}


	public function createService0192(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('092'),
			$this->getService('089'),
			$this->getService('090'),
			false
		);
	}


	public function createService0193(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('089'),
			$this->getService('090'),
			$this->getService('092'),
			false
		);
	}


	public function createService0194(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0195(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0196(): PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule(true);
	}


	public function createService0197(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule;
	}


	public function createService0198(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createService0199(): PHPStan\Rules\Variables\VariableCertaintyNullCoalesceRule
	{
		return new PHPStan\Rules\Variables\VariableCertaintyNullCoalesceRule;
	}


	public function createService0200(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule(
			$this->getService('094'),
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			$this->getService('082'),
			$this->getService('087'),
			true
		);
	}


	public function createService0201(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('078'), $this->getService('092'), false);
	}


	public function createService0202(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('094'),
			$this->getService('reflectionProvider'),
			$this->getService('075'),
			$this->getService('082'),
			$this->getService('087'),
			true,
			false
		);
	}


	public function createService0203(): PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule
	{
		return new PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule($this->getService('090'), false);
	}


	public function createService0204(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule(false);
	}


	public function createService0205(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(false);
	}


	public function createService0206(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule($this->getService('092'), false);
	}


	public function createService0207(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule(
			$this->getService('080'),
			$this->getService('betterReflectionFunctionReflector')
		);
	}


	public function createService0208(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('092'), false);
	}


	public function createService0209(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(false);
	}


	public function createService0210(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(false, true);
	}


	public function createService0211(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('076'), true);
	}


	public function createService0212(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('076'), true);
	}


	public function createService0213(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('076'), true);
	}


	public function createService0214(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule;
	}


	public function createService0215(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule;
	}


	public function createService0216(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('088'), [], [], false);
	}


	public function createService0217(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('076'), true);
	}


	public function createService0218(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('076'), true);
	}


	public function createService0219(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('077'), false, true);
	}


	public function createService0220(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('077'), false, true);
	}


	public function createService0221(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('077'), false, true);
	}


	public function createService0222(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule(false);
	}


	public function createService0223(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('076'), true);
	}


	public function createService0224(): PHPStan\Rules\Comparison\UnreachableIfBranchesRule
	{
		return new PHPStan\Rules\Comparison\UnreachableIfBranchesRule($this->getService('076'), true);
	}


	public function createService0225(): PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule
	{
		return new PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule($this->getService('076'), true);
	}


	public function createService0226(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false);
	}


	public function createService0227(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('085'));
	}


	public function createService0228(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('085'));
	}


	public function createService0229(): PHPStan\PhpDoc\StubSourceLocatorFactory
	{
		return new PHPStan\PhpDoc\StubSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('0174'),
			$this->getService('065'),
			$this->getService('040'),
			[
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('071'),
			$this->getService('043'),
			$this->getService('betterReflectionClassReflector'),
			$this->getService('094'),
			$this->getService('072'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('054'),
			$this->getService('relativePathHelper'),
			$this->getService('08'),
			$this->getService('07'),
			$this->getService('046'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('betterReflectionConstantReflector')
		);
	}


	public function createServiceBetterReflectionSourceLocator(): _HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0172')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('040'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/mateuszcholewka/Sites/MovieRental/var/cache/ecs/cache/PHPStan');
	}


	public function createServiceContainer(): Container_adea40e2b1
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		return new PHPStan\Parser\DirectParser($this->getService('06'), $this->getService('03'));
	}


	public function createServiceErrorFormatter__baselineNeon(): PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('071'),
			$this->getService('043'),
			$this->getService('054'),
			$this->getService('094'),
			$this->getService('072'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createServiceNodeScopeResolverClassReflector(): _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ClassReflector
	{
		return $this->getService('stubClassReflector');
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('052'));
	}


	public function createServicePhpParserLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return $this->getService('stubBetterReflectionProvider');
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			false
		);
	}


	public function createServiceRegexGrammarStream(): Hoa\File\Read
	{
		return new Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
	}


	public function createServiceRegexParser(): Hoa\Compiler\Llk\Parser
	{
		return Hoa\Compiler\Llk\Llk::load($this->getService('regexGrammarStream'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('091')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			'/Users/mateuszcholewka/Sites/MovieRental',
			['/Users/mateuszcholewka/Sites/MovieRental/src']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('07'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__10(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('078')
		);
	}


	public function createServiceRules__11(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule($this->getService('079'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('079'));
	}


	public function createServiceRules__13(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('079'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__15(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule;
	}


	public function createServiceRules__16(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__17(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('079'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__19(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0188'));
	}


	public function createServiceRules__2(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('092'),
			$this->getService('075')
		);
	}


	public function createServiceRules__20(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0189'));
	}


	public function createServiceRules__21(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule;
	}


	public function createServiceRules__22(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('093'));
	}


	public function createServiceRules__23(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule;
	}


	public function createServiceRules__24(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('093'));
	}


	public function createServiceRules__25(): PHPStan\Rules\Variables\VariableCertaintyInIssetRule
	{
		return new PHPStan\Rules\Variables\VariableCertaintyInIssetRule;
	}


	public function createServiceRules__26(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('092'));
	}


	public function createServiceRules__27(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('092'));
	}


	public function createServiceRules__28(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('07'), $this->getService('092'));
	}


	public function createServiceRules__29(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('092'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRules__30(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__31(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('094'), $this->getService('081'));
	}


	public function createServiceRules__32(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('083'));
	}


	public function createServiceRules__33(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('094'), $this->getService('083'));
	}


	public function createServiceRules__34(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('084'));
	}


	public function createServiceRules__35(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('094'), $this->getService('081'));
	}


	public function createServiceRules__36(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('094'), $this->getService('083'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('094'), $this->getService('083'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('084'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('094'), $this->getService('083'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('075'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__40(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__41(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('07'), $this->getService('092'));
	}


	public function createServiceRules__42(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule;
	}


	public function createServiceRules__43(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('092'));
	}


	public function createServiceRules__44(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('094'), $this->getService('082'));
	}


	public function createServiceRules__45(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule($this->getService('082'));
	}


	public function createServiceRules__46(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('012'), $this->getService('015'));
	}


	public function createServiceRules__47(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('012'), $this->getService('015'));
	}


	public function createServiceRules__48(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('094'));
	}


	public function createServiceRules__49(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('094'));
	}


	public function createServiceRules__5(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('075'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__50(): PHPStan\Rules\Arrays\AppendedArrayItemTypeRule
	{
		return new PHPStan\Rules\Arrays\AppendedArrayItemTypeRule($this->getService('090'), $this->getService('092'));
	}


	public function createServiceRules__51(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('092'));
	}


	public function createServiceRules__52(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('092'));
	}


	public function createServiceRules__53(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('092'));
	}


	public function createServiceRules__54(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('092'));
	}


	public function createServiceRules__55(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('092'));
	}


	public function createServiceRules__56(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('080'));
	}


	public function createServiceRules__57(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('080'));
	}


	public function createServiceRules__58(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('092'));
	}


	public function createServiceRules__59(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('080'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('075'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__60(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('092'));
	}


	public function createServiceRules__61(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule(
			$this->getService('092'),
			$this->getService('089'),
			$this->getService('090')
		);
	}


	public function createServiceRules__62(): PHPStan\Rules\Variables\ThrowTypeRule
	{
		return new PHPStan\Rules\Variables\ThrowTypeRule($this->getService('092'));
	}


	public function createServiceRules__63(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('092'));
	}


	public function createServiceRules__64(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createServiceRules__65(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule;
	}


	public function createServiceRules__66(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('07'));
	}


	public function createServiceRules__67(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createServiceRules__68(): PHPStan\Rules\Exceptions\DeadCatchRule
	{
		return new PHPStan\Rules\Exceptions\DeadCatchRule;
	}


	public function createServiceRules__69(): PHPStan\Rules\Functions\CallToFunctionStamentWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStamentWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('075'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__70(): PHPStan\Rules\Methods\CallToMethodStamentWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStamentWithoutSideEffectsRule($this->getService('092'));
	}


	public function createServiceRules__71(): PHPStan\Rules\Methods\CallToStaticMethodStamentWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStamentWithoutSideEffectsRule(
			$this->getService('092'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__72(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule;
	}


	public function createServiceRules__73(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule;
	}


	public function createServiceRules__74(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule;
	}


	public function createServiceRules__8(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('078'),
			$this->getService('075')
		);
	}


	public function createServiceRules__9(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0174'),
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			null
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/mateuszcholewka/Sites/MovieRental');
	}


	public function createServiceStubBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('071'),
			$this->getService('043'),
			$this->getService('stubClassReflector'),
			$this->getService('094'),
			$this->getService('072'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('054'),
			$this->getService('relativePathHelper'),
			$this->getService('08'),
			$this->getService('07'),
			$this->getService('046'),
			$this->getService('stubFunctionReflector'),
			$this->getService('stubConstantReflector')
		);
	}


	public function createServiceStubClassReflector(): _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ClassReflector
	{
		return new _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ClassReflector($this->getService('stubSourceLocator'));
	}


	public function createServiceStubConstantReflector(): _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ConstantReflector
	{
		return new _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\ConstantReflector(
			$this->getService('stubSourceLocator'),
			$this->getService('stubClassReflector')
		);
	}


	public function createServiceStubFunctionReflector(): _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\FunctionReflector
	{
		return new _HumbugBox71425477b33d\Roave\BetterReflection\Reflector\FunctionReflector(
			$this->getService('stubSourceLocator'),
			$this->getService('stubClassReflector')
		);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('052'),
			$this->getService('094'),
			[
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/PDOStatement.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/date.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/zip.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/dom.stub',
				'phar:///Users/mateuszcholewka/Sites/MovieRental/vendor/phpstan/phpstan/phpstan/stubs/spl.stub',
			]
		);
	}


	public function createServiceStubSourceLocator(): _HumbugBox71425477b33d\Roave\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0229')->create();
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('040'));
	}


	public function initialize()
	{
	}
}
