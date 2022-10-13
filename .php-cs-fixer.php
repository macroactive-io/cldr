<?php

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
                   '@Symfony'                   => true,
                   '@PHP81Migration'            => true,
                   '@PHP80Migration:risky'      => true,
                   'array_syntax'               => ['syntax' => 'short'],
                   'combine_consecutive_unsets' => true,
                   // one should use PHPUnit methods to set up expected exception instead of annotations
                   'general_phpdoc_annotation_remove' => [
                       'annotations' => [
                           'author',
                           'copyright',
                           'license',
                           'package',
                           'expectedException',
                           'expectedExceptionMessage',
                           'expectedExceptionMessageRegExp',
                       ],
                   ],
                   'function_typehint_space'     => false,
                   'no_empty_phpdoc'             => true,
                   'no_superfluous_phpdoc_tags'  => ['allow_mixed' => false, 'allow_unused_params' => false],
                   'phpdoc_line_span'            => ['property' => 'single'],
                   'heredoc_to_nowdoc'           => true,
                   'list_syntax'                 => ['syntax' => 'short'],
                   'blank_line_before_statement' => ['statements' => ['if', 'break', 'continue', 'declare', 'return', 'throw', 'try', 'yield']],
                   'no_extra_blank_lines'        => [
                       'tokens' => [
                           'break',
                           'continue',
                           'extra',
                           'return',
                           'throw',
                           'use',
                           'parenthesis_brace_block',
                           'square_brace_block',
                           'curly_brace_block',
                       ],
                   ],
                   'echo_tag_syntax'                     => true,
                   'method_argument_space'               => false,
                   'no_useless_else'                     => true,
                   'no_useless_return'                   => true,
                   'ordered_class_elements'              => true,
                   'ordered_imports'                     => ['sort_algorithm' => 'alpha', 'imports_order' => ['const', 'class', 'function']],
                   'php_unit_test_class_requires_covers' => true,
                   'phpdoc_align'                         => [
                       'tags' => [
                           'param', 'return', 'throws', 'type', 'var'
                       ],
                   ],
                   'strict_comparison'                   => true,
                   'strict_param'                        => true,
                   'self_accessor'                       => true,
                   'phpdoc_add_missing_param_annotation' => true,
                   'phpdoc_order'                        => true,
                   'phpdoc_no_alias_tag'                 => ['replacements' => ['link' => 'website']],
                   'phpdoc_summary'                      => false,
                   'phpdoc_to_comment'                   => false,
                   'phpdoc_types_order'                  => false,
                   // breaks psalm-specific notation sometimes!
                   'semicolon_after_instruction'         => true,
                   'single_blank_line_at_eof'            => true,
                   'single_line_throw'                   => false,
                   'types_spaces'                        => false,
                   'binary_operator_spaces'              => [
                       'default'   => 'single_space',
                       'operators' => [
                           '='   => 'align_single_space_minimal',
                           '-='  => 'align_single_space_minimal',
                           '+='  => 'align_single_space_minimal',
                           '=>'  => 'align_single_space_minimal',
                           '===' => null,
                           '??=' => 'align_single_space_minimal',
                       ],
                   ],
                   'concat_space' => [
                       'spacing' => 'one',
                   ],
                   'yoda_style' => false,
               ])
    ->setFinder(
        PhpCsFixer\Finder::create()
                         ->in(__DIR__ . '/src')
    )
    ;