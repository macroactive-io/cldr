<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptThai;
use Fisharebest\Localization\Territory\TerritoryTh;

/**
 * Class LanguageTh - Representation of the Thai language.
 */
class LanguageTh extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'th';
    }

    public function defaultScript()
    {
        return new ScriptThai();
    }

    public function defaultTerritory()
    {
        return new TerritoryTh();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
