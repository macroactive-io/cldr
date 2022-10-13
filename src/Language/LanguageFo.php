<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryFo;

/**
 * Class LanguageFo - Representation of the Faroese language.
 */
class LanguageFo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'fo';
    }

    public function defaultTerritory()
    {
        return new TerritoryFo();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
