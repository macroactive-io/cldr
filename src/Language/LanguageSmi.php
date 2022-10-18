<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Class LanguageSmi - Representation of the Sami language.
 * @psalm-immutable
 */
class LanguageSmi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'smi';
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
