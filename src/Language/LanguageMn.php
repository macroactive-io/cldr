<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMn;

/**
 * Class LanguageMn - Representation of the Mongolian language.
 */
class LanguageMn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mn';
    }

    public function defaultTerritory()
    {
        return new TerritoryMn();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
