<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Territory\TerritoryIs;

/**
 * Class LanguageIs - Representation of the Icelandic language.
 */
class LanguageIs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'is';
    }

    public function defaultTerritory()
    {
        return new TerritoryIs();
    }

    public function pluralRule()
    {
        return new PluralRule15();
    }
}
