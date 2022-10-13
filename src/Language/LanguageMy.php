<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptMymr;
use Fisharebest\Localization\Territory\TerritoryMm;

/**
 * Class LanguageMy - Representation of the Burmese language.
 */
class LanguageMy extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'my';
    }

    public function defaultScript()
    {
        return new ScriptMymr();
    }

    public function defaultTerritory()
    {
        return new TerritoryMm();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
