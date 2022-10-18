<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCentralAtlasTamazight;
use Macroactive\Cldr\Territory\TerritoryMa;

/**
 * Class LanguageTzm - Representation of the Central Atlas Tamazight language.
 * @psalm-immutable
 */
class LanguageTzm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tzm';
    }

    public function defaultTerritory(): TerritoryMa
    {
        return new TerritoryMa();
    }

    public function pluralRule(): PluralRuleCentralAtlasTamazight
    {
        return new PluralRuleCentralAtlasTamazight();
    }
}
