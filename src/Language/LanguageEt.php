<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEe;

/**
 * Class LanguageEt - Representation of the Estonian language.
 */
class LanguageEt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'et';
    }

    public function defaultTerritory()
    {
        return new TerritoryEe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
