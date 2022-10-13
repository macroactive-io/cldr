<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleCentralAtlasTamazight;
use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LanguageTzm - Representation of the Central Atlas Tamazight language.
 */
class LanguageTzm extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tzm';
    }

    public function defaultTerritory()
    {
        return new TerritoryMa();
    }

    public function pluralRule()
    {
        return new PluralRuleCentralAtlasTamazight();
    }
}
