<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LanguageAz - Representation of the Azerbaijani language.
 */
class LanguageAz extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'az';
    }

    public function defaultTerritory()
    {
        return new TerritoryIr();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
