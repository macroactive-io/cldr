<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LanguageFr - Representation of the French language.
 */
class LanguageFr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'fr';
    }

    public function defaultTerritory()
    {
        return new TerritoryFr();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
