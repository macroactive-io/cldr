<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Class LanguageSmn - Representation of the Inari Sami language.
 *
 * @psalm-immutable
 */
class LanguageSmn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'smn';
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
