<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageSaq - Representation of the Samburu language.
 */
class LanguageSaq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'saq';
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
