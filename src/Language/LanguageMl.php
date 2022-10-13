<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageMl - Representation of the Malayalam language.
 */
class LanguageMl extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ml';
    }

    public function defaultScript()
    {
        return new ScriptMlym();
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
