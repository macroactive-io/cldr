<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRs;

/**
 * Class LanguageSr - Representation of the Serbian language.
 */
class LanguageSr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sr';
    }

    public function defaultScript()
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory()
    {
        return new TerritoryRs();
    }

    public function pluralRule()
    {
        return new PluralRule7();
    }
}
