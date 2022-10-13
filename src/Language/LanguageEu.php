<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEs;

/**
 * Class LanguageEu - Representation of the Basque language.
 */
class LanguageEu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'eu';
    }

    public function defaultTerritory()
    {
        return new TerritoryEs();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
