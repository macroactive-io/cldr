<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use Fisharebest\Localization\Territory\TerritoryGr;

/**
 * Class LanguageEl - Representation of the Modern Greek (1453-) language.
 */
class LanguageEl extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'el';
    }

    public function defaultScript()
    {
        return new ScriptGrek();
    }

    public function defaultTerritory()
    {
        return new TerritoryGr();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
