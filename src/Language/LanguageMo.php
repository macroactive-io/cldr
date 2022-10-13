<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LanguageIt - Representation of the Italian language.
 */
class LanguageMo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mo';
    }

    public function defaultTerritory()
    {
        return new TerritoryMd();
    }

    public function pluralRule()
    {
        return new PluralRule5();
    }
}
