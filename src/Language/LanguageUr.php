<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LanguageUr - Representation of the Urdu language.
 */
class LanguageUr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ur';
    }

    public function defaultScript()
    {
        return new ScriptArab();
    }

    public function defaultTerritory()
    {
        return new TerritoryPk();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
