<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LanguageSd - Representation of the Sindhi language.
 */
class LanguageSd extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sd';
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
