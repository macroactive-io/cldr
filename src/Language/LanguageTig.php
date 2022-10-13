<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LanguageTif - Representation of the Tigre language.
 */
class LanguageTig extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tig';
    }

    public function defaultScript()
    {
        return new ScriptEthi();
    }

    public function defaultTerritory()
    {
        return new TerritoryEr();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
