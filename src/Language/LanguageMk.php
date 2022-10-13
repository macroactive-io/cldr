<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMk;

/**
 * Class LanguageMk - Representation of the Macedonian language.
 */
class LanguageMk extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mk';
    }

    public function defaultScript()
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory()
    {
        return new TerritoryMk();
    }

    public function pluralRule()
    {
        return new PluralRule15();
    }
}
