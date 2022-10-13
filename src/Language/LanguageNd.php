<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LanguageNd - Representation of the North Ndebele language.
 */
class LanguageNd extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nd';
    }

    public function defaultTerritory()
    {
        return new TerritoryZw();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
