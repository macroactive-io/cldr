<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGujr;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageGu - Representation of the Gujarati language.
 */
class LanguageGu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'gu';
    }

    public function defaultScript()
    {
        return new ScriptGujr();
    }

    public function defaultTerritory()
    {
        return new TerritoryIn();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
