<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LanguageHe - Representation of the Hebrew language.
 */
class LanguageHe extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'he';
    }

    public function defaultScript()
    {
        return new ScriptHebr();
    }

    public function defaultTerritory()
    {
        return new TerritoryIl();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
