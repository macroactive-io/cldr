<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryCv;

/**
 * Class LanguageKea - Representation of the Kabuverdianu language.
 */
class LanguageKea extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kea';
    }

    public function defaultTerritory()
    {
        return new TerritoryCv();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
