<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptHans;
use Macroactive\Cldr\Territory\TerritoryCn;

/**
 * Chinese
 *
 * @psalm-immutable
 */
class LanguageZh extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Chinese';
    }

    public function code(): string
    {
        return 'zh';
    }

    public function defaultTerritory(): TerritoryCn
    {
        return new TerritoryCn();
    }

    public function defaultScript(): ScriptHans
    {
        return new ScriptHans();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
