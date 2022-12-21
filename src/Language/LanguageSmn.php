<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Inari Sami
 *
 * @psalm-immutable
 */
class LanguageSmn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Inari Sami';
    }

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
