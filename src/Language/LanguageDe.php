<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDe;

/**
 * Class LanguageDe - Representation of the German language.
 */
class LanguageDe extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'de';
    }

    public function defaultTerritory()
    {
        return new TerritoryDe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
