<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptSyrc;
use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LanguageSyr - Representation of the Syriac language.
 */
class LanguageSyr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'syr';
    }

    public function defaultScript()
    {
        return new ScriptSyrc();
    }

    public function defaultTerritory()
    {
        return new TerritoryIq();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
