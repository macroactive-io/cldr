<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCakm;
use Fisharebest\Localization\Territory\TerritoryBd;

/**
 * Class LanguageCgg - Representation of the Chakma language.
 *
 * @TODO          Plural rules
 */
class LanguageCcp extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ccp';
    }

    public function defaultTerritory()
    {
        return new TerritoryBd();
    }

    public function defaultScript()
    {
        return new ScriptCakm();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
