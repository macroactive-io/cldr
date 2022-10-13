<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleCentralAtlasTamazight;
use Fisharebest\Localization\Territory\TerritoryMa;

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
