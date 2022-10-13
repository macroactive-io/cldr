<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryCn;

/**
 * Class LanguageUg - Representation of the Uighur language.
 */
class LanguageUg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ug';
    }

    public function defaultScript()
    {
        return new ScriptArab();
    }

    public function defaultTerritory()
    {
        return new TerritoryCn();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
