<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageTa - Representation of the Tamil language.
 */
class LanguageTa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ta';
    }

    public function defaultScript()
    {
        return new ScriptTaml();
    }

    public function defaultTerritory()
    {
        return new TerritoryIn();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
