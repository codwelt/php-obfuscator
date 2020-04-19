<?php

/**
 * @author Pawel Maslak <pawel@maslak.it>
 */

namespace pmaslak\PhpObfuscator;


class Config
{
    private static $obfuscator_version = '1.0.4';
    private static $yak_version = '2.0.4';//just denture for now
    private static $debug = false;
    private static $obfuscationOptions = [];
    private static $allowedMimeTypes = ['text/x-php', 'text/x-c++'];

    public static $t_ignore_pre_defined_classes    = 'all';        // 'all' (default value) , 'none',  or array of pre-defined classes that you use in your software:
    public static $t_pre_defined_class_methods = [];
    public static $t_pre_defined_classes = [];
    public static $t_pre_defined_class_properties = [];
    public static $t_pre_defined_class_constants = [];
    //      ex: array('Exception', 'PDO', 'PDOStatement', 'PDOException');
    // As instantiation is done at runtime, it is impossible to statically determinate when a method call is detected, on which class the object belong.
    // so, all method names that exists in a pre_defined_class to ignore are ignored within every classes.
    // if you have some method names in your classes that have the same name that a predefine class method, it will not be obfuscated.
    // you can limit the number of method names to ignore by providing an array of the pre-defined classes you really use in your software!
    // same behaviour for properties...

    public static $t_ignore_constants              = null;         // array where values are names to ignore.
    public static $t_ignore_variables              = null;         // array where values are names to ignore.
    public static $t_ignore_functions              = null;         // array where values are names to ignore.
    public static $t_ignore_class_constants        = null;         // array where values are names to ignore.
    public static $t_ignore_methods                = null;         // array where values are names to ignore.
    public static $t_ignore_properties             = null;         // array where values are names to ignore.
    public static $t_ignore_classes                = null;         // array where values are names to ignore.
    public static $t_ignore_interfaces             = null;         // array where values are names to ignore.
    public static $t_ignore_traits                 = null;         // array where values are names to ignore.
    public static $t_ignore_namespaces             = null;         // array where values are names to ignore.
    public static $t_ignore_labels                 = null;         // array where values are names to ignore.

    public static $t_ignore_constants_prefix       = null;         // array where values are prefix of names to ignore.
    public static $t_ignore_variables_prefix       = null;         // array where values are prefix of names to ignore.
    public static $t_ignore_functions_prefix       = null;         // array where values are prefix of names to ignore.

    public static $t_ignore_class_constants_prefix = null;         // array where values are prefix of names to ignore.
    public static $t_ignore_properties_prefix      = null;         // array where values are prefix of names to ignore.
    public static $t_ignore_methods_prefix         = null;         // array where values are prefix of names to ignore.

    public static $t_ignore_classes_prefix         = null;         // array where values are prefix of names to ignore.
    public static $t_ignore_interfaces_prefix      = null;         // array where values are names to ignore.
    public static $t_ignore_traits_prefix          = null;         // array where values are names to ignore.
    public static $t_ignore_namespaces_prefix      = null;         // array where values are prefix of names to ignore.
    public static $t_ignore_labels_prefix          = null;         // array where values are prefix of names to ignore.

    public static $parser_mode                     = 'ONLY_PHP7';// allowed modes are 'PREFER_PHP7', 'PREFER_PHP5', 'ONLY_PHP7', 'ONLY_PHP5'

    public static $scramble_mode                   = 'identifier'; // allowed modes are identifier, hexa, numeric
    public static $scramble_length                 = null;         // min length of scrambled names (max = 16 for identifier, 32 for hexa and numeric)

    public static $t_obfuscate_php_extension       = ['php'];

    /**
     * brand new
     */
    public static $shuffleStatements           = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateLoopStatement      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateStringLiteral      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateVariableName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateMethodName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!

    public static $obfuscateIfStatement      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateLabelName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateNamespaceName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateConstantName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateClassConstantName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateFunctionName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateClassName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateTraitName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscatePropertyName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $obfuscateInterfaceName      = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
    public static $shuffleNodesChunkMode       = 'fixed';      // 'fixed' or 'ratio' in fixed mode, the chunk_size is always equal to the min chunk size!
    public static $shuffleNodesMinChunkSize    =    1;         // minimum number of statements in a chunk! the min value is 1, that gives you the maximum of obfuscation ... and the minimum of performance...
    public static $shuffleNodesChunkRatio      =   20;         // ratio > 1  100/ratio is the percentage of chunks in a statements sequence  ratio = 2 means 50%  ratio = 100 mins 1% ...
    public static $silent      =   true;         // ratio > 1  100/ratio is the percentage of chunks in a statements sequence  ratio = 2 means 50%  ratio = 100 mins 1% ...

    public static $shuffleStmts                   = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!

//    public $shuffle_stmts                   = true;         // shuffle chunks of statements!  disable this obfuscation (or minimize the number of chunks) if performance is important for you!
//    public $shuffle_stmts_min_chunk_size    =    1;         // minimum number of statements in a chunk! the min value is 1, that gives you the maximum of obfuscation ... and the minimum of performance...
//    public $shuffle_stmts_chunk_mode        = 'fixed';      // 'fixed' or 'ratio' in fixed mode, the chunk_size is always equal to the min chunk size!
//    public $shuffle_stmts_chunk_ratio       =   20;         // ratio > 1  100/ratio is the percentage of chunks in a statements sequence  ratio = 2 means 50%  ratio = 100 mins 1% ...
//    // if you increase the number of chunks, you increase also the obfuscation level ... and you increase also the performance overhead!


    /**
     * //option => description
     * @var array
     */
    private static $options = [
        'no-strip-indentation' => 'multi line output',
        'strip-indentation' => 'single line output',
        'no-shuffle-statements' => 'do not shuffle statements',
        'shuffle-statements' => 'shuffle statements',
        'no-obfuscate-string-literal' => 'do not obfuscate string literals',
        'obfuscate-string-literal' => 'obfuscate string literals',
        'no-obfuscate-loop-statement' => 'do not obfuscate loop statements',
        'obfuscate-loop-statement' => 'obfuscate loop statements',
        'no-obfuscate-if-statement' => 'do not obfuscate if statements',
        'obfuscate-if-statement' => 'obfuscate if statements',
        'no-obfuscate-constant-name' => 'do not obfuscate constant names',
        'obfuscate-constant-name' => 'obfuscate constant names',
        'no-obfuscate-variable-name' => 'do not obfuscate variable names',
        'obfuscate-variable-name' => 'obfuscate variable names',
        'no-obfuscate-function-name' => 'do not obfuscate function names',
        'obfuscate-function-name' => 'obfuscate function names',
        'no-obfuscate-class_constant-name' => 'do not obfuscate class constant names',
        'obfuscate-class_constant-name' => 'obfuscate class constant names',
        'no-obfuscate-class-name' => 'do not obfuscate class names',
        'obfuscate-class-name' => 'obfuscate class names',
        'no-obfuscate-interface-name' => 'do not obfuscate interface names',
        'obfuscate-interface-name' => 'obfuscate interface names',
        'no-obfuscate-trait-name' => 'do not obfuscate trait names',
        'obfuscate-trait-name' => 'obfuscate trait names',
        'no-obfuscate-property-name' => 'do not obfuscate property names',
        'obfuscate-property-name' => 'obfuscate property names',
        'no-obfuscate-method-name' => 'do not obfuscate method names',
        'obfuscate-method-name' => 'obfuscate method names',
        'no-obfuscate-namespace-name' => 'do not obfuscate namespace names',
        'obfuscate-namespace-name' => ' obfuscate namespace names',
        'no-obfuscate-label-name' => 'do not obfuscate label names',
        'obfuscate-label-name' => 'obfuscate label names',
        'scramble-mode' => 'force scramble mode',
        'scramble-length'
    ];

    public static $preDefinedClasses = [];
    public static $preDefinedInterfaces = [];
    public static $preDefinedTraits = [];

    /**
     * @return string
     */
    public static function getVersion(): string
    {
        return self::$obfuscator_version;
    }

    /**
     * @return string
     */
    public static function getYakVersion(): string
    {
        return self::$yak_version;
    }

    public static function isSilent(): bool
    {
        return self::$silent;
    }

    public static function isDebug(): bool
    {
        return self::$debug;
    }

    public static function enableDebug(): void
    {
        self::$debug = true;
    }

    public static function disableDebug(): void
    {
        self::$debug = false;
    }

    public static function getAllowedMimeTypes(): array
    {
        return self::$allowedMimeTypes;
    }

    public static function getObfuscationOptions(): array
    {
        return self::$obfuscationOptions;
    }

    public static function setObfuscationOptions(array $options): void
    {
        self::$obfuscationOptions = $options;
    }

    public static function setAllowedMimeTypes(array $types): void
    {
        self::$allowedMimeTypes = $types;
    }

    public static function getAvailableOptions(): array
    {
        return self::$options;
    }

    public static function getFilteredOptions(array $options): array
    {
        $options = array_filter($options, 'strlen');
        $result = [];

        foreach ($options as $key) {
            if (isset(self::$options[$key])) {
                $result[] = $key;
            }
        }

        return $result;
    }

    /**
     * @desc exported from Yak Config
     */
    public function validate(): void
    {
        $this->shuffle_stmts_min_chunk_size += 0;
        if ($this->shuffle_stmts_min_chunk_size<1)  $this->shuffle_stmts_min_chunk_size = 1;

        $this->shuffle_stmts_chunk_ratio += 0;
        if ($this->shuffle_stmts_chunk_ratio<2)     $this->shuffle_stmts_chunk_ratio = 2;

        if ($this->shuffle_stmts_chunk_mode!='ratio') $this->shuffle_stmts_chunk_mode = 'fixed';

        if (!isset( $this->t_ignore_pre_defined_classes))                                                       $this->t_ignore_pre_defined_classes = 'all';
        if (!is_array($this->t_ignore_pre_defined_classes) && ( $this->t_ignore_pre_defined_classes != 'none')) $this->t_ignore_pre_defined_classes = 'all';
    }

}
