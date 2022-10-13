<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryVn;

/**
 * Class LanguageVi - Representation of the Vietnamese language.
 */
class LanguageVi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'vi';
    }

    public function defaultTerritory()
    {
        return new TerritoryVn();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
