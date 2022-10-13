<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryTo;

/**
 * Class LanguageTo - Representation of the Tonga (Tonga Islands) language.
 */
class LanguageTo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'to';
    }

    public function defaultTerritory()
    {
        return new TerritoryTo();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
