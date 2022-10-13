<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LanguageYo - Representation of the Yoruba language.
 */
class LanguageYo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'yo';
    }

    public function defaultTerritory()
    {
        return new TerritoryNg();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
