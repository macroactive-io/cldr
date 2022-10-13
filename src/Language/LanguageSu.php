<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptSund;
use Fisharebest\Localization\Territory\TerritoryId;

/**
 * Class LanguageSu - Representation of the Sotho language.
 */
class LanguageSu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'su';
    }

    public function defaultScript()
    {
        return new ScriptSund();
    }

    public function defaultTerritory()
    {
        return new TerritoryId();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
