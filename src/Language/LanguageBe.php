<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBy;

/**
 * Class LanguageBe - Representation of the Belarusian language.
 */
class LanguageBe extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'be';
    }

    public function defaultScript()
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory()
    {
        return new TerritoryBy();
    }

    public function pluralRule()
    {
        return new PluralRule7();
    }
}
