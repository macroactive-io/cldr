<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LanguageSes - Representation of the Koyraboro Senni Songhai language.
 */
class LanguageSes extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ses';
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
