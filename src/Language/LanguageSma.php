<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Class LanguageSma - Representation of the Southern Sami language.
 * @psalm-immutable
 */
class LanguageSma extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sma';
    }

    public function defaultTerritory(): TerritoryFi
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
