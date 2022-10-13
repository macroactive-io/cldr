<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageXh - Representation of the Wolof language.
 */
class LanguageWo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'wo';
    }

    public function defaultTerritory()
    {
        return new TerritorySn();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
