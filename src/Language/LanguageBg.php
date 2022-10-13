<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBg;

/**
 * Class LanguageBg - Representation of the Bulgarian language.
 */
class LanguageBg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bg';
    }

    public function defaultScript()
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory()
    {
        return new TerritoryBg();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
