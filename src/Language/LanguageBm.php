<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LanguageBm - Representation of the Bambara language.
 */
class LanguageBm extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bm';
    }

    public function defaultTerritory()
    {
        return new TerritoryMl();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
