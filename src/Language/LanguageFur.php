<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LanguageFur - Representation of the Friulian language.
 */
class LanguageFur extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'fur';
    }

    public function defaultTerritory()
    {
        return new TerritoryIt();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
