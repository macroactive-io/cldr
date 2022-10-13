<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LanguageNy - Representation of the Chewa language.
 */
class LanguageNy extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ny';
    }

    public function defaultTerritory()
    {
        return new TerritoryMw();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
