<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKhmr;
use Fisharebest\Localization\Territory\TerritoryKh;

/**
 * Class LanguageKm - Representation of the Central Khmer language.
 */
class LanguageKm extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'km';
    }

    public function defaultScript()
    {
        return new ScriptKhmr();
    }

    public function defaultTerritory()
    {
        return new TerritoryKh();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
