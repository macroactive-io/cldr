<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleInterface;
use Macroactive\Cldr\Script\ScriptInterface;
use Macroactive\Cldr\Territory\TerritoryInterface;

/**
 * Interface LanguageInterface - Representation of a language.
 * @psalm-immutable
 */
interface LanguageInterface
{
    /**
     * The ISO639 code for this language.
     * @return non-empty-string
     */
    public function code(): string;

    /**
     * The default territory where this language is spoken, which would
     * normally be omitted from an IETF language tag.
     * For example, we would normally omit the JP subtag from ja-JP.
     */
    public function defaultTerritory(): TerritoryInterface;

    /**
     * The default script used to write this language, which would
     * normally be omitted from an IETF language tag.
     * For example, we would normally omit the Latn subtag from en-Latn.
     */
    public function defaultScript(): ScriptInterface;

    /**
     * Which plural rule is used in this locale?
     */
    public function pluralRule(): PluralRuleInterface;
}
