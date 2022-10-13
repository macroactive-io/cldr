<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LanguageChr - Representation of the Cherokee language.
 */
class LanguageChr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'chr';
    }

    public function defaultTerritory()
    {
        return new TerritoryUs();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
