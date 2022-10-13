<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZm;

/**
 * Class LanguageBem - Representation of the Bemba (Zambia) language.
 */
class LanguageBem extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bem';
    }

    public function defaultTerritory()
    {
        return new TerritoryZm();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
