<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule13;
use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LanguageMt - Representation of the Maltese language.
 */
class LanguageMt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mt';
    }

    public function defaultTerritory()
    {
        return new TerritoryMt();
    }

    public function pluralRule()
    {
        return new PluralRule13();
    }
}
