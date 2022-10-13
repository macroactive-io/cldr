<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageKi - Representation of the Kikuyu language.
 */
class LanguageKi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ki';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
