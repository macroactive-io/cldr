<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageJgo - Representation of the Ngomba language.
 */
class LanguageJgo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'jgo';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
