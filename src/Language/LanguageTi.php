<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageTi - Representation of the Tigrinya language.
 */
class LanguageTi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ti';
    }

    public function defaultScript()
    {
        return new ScriptEthi();
    }

    public function defaultTerritory()
    {
        return new TerritoryEt();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
