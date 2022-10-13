<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageOr - Representation of the Oriya language.
 */
class LanguageOr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'or';
    }

    public function defaultScript()
    {
        return new ScriptOrya();
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
