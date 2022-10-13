<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Territory\TerritoryLv;

/**
 * Class LanguageLv - Representation of the Latvian language.
 */
class LanguageLv extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'lv';
    }

    public function defaultTerritory()
    {
        return new TerritoryLv();
    }

    public function pluralRule()
    {
        return new PluralRule3();
    }
}
