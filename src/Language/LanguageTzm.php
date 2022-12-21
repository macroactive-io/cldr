<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCentralAtlasTamazight;
use Macroactive\Cldr\Territory\TerritoryMa;

/**
 * Central Atlas Tamazight
 *
 * @psalm-immutable
 */
class LanguageTzm extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Central Atlas Tamazight';
    }

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
