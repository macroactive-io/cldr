<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageKs - Representation of the Kashmiri language.
 */
class LanguageKs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ks';
    }

    public function defaultTerritory()
    {
        return new TerritoryIn();
    }

    public function defaultScript()
    {
        return new ScriptArab();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
