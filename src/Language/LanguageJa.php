<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJpan;
use Fisharebest\Localization\Territory\TerritoryJp;

/**
 * Class LanguageJa - Representation of the Japanese language.
 */
class LanguageJa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ja';
    }

    public function defaultScript()
    {
        return new ScriptJpan();
    }

    public function defaultTerritory()
    {
        return new TerritoryJp();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
