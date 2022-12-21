<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryCn;

/**
 * Uighur
 *
 * @psalm-immutable
 */
class LanguageUg extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Uighur';
    }

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
