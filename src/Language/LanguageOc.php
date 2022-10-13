<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LanguageOc - Representation of the Occitan language.
 */
class LanguageOc extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'oc';
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
