<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LanguageBs - Representation of the Bosnian language.
 */
class LanguageBs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bs';
    }

    public function defaultTerritory()
    {
        return new TerritoryBa();
    }

    public function pluralRule()
    {
        return new PluralRule7();
    }
}
