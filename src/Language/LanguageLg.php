<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LanguageLg - Representation of the Ganda language.
 */
class LanguageLg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'lg';
    }

    public function defaultTerritory()
    {
        return new TerritoryUg();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
