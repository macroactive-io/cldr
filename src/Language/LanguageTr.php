<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryTr;

/**
 * Class LanguageTr - Representation of the Turkish language.
 */
class LanguageTr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tr';
    }

    public function defaultTerritory()
    {
        return new TerritoryTr();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
