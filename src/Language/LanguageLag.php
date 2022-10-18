<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleZeroOneOther;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Class LanguageLag - Representation of the Langi language.
 * @psalm-immutable
 */
class LanguageLag extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lag';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRuleZeroOneOther
    {
        return new PluralRuleZeroOneOther();
    }
}
