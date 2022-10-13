<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryUa;

/**
 * Class LanguageUk - Representation of the Ukrainian language.
 */
class LanguageUk extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'uk';
    }

    public function defaultScript()
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory()
    {
        return new TerritoryUa();
    }

    public function pluralRule()
    {
        return new PluralRule7();
    }
}
