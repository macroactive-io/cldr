<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryCn;

/**
 * Class LanguageUg - Representation of the Uighur language.
 * @psalm-immutable
 */
class LanguageUg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ug';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryCn
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
