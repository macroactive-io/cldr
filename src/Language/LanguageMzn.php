<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LanguageMzn - Representation of the Mazanderani language.
 */
class LanguageMzn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mzn';
    }

    public function defaultScript()
    {
        return new ScriptArab();
    }

    public function defaultTerritory()
    {
        return new TerritoryIr();
    }

    public function pluralRule()
    {
        return new PluralRule12();
    }
}
