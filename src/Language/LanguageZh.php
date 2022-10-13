<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHans;
use Fisharebest\Localization\Territory\TerritoryCn;

/**
 * Class LanguageZh - Representation of the Chinese language.
 */
class LanguageZh extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'zh';
    }

    public function defaultTerritory()
    {
        return new TerritoryCn();
    }

    public function defaultScript()
    {
        return new ScriptHans();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
