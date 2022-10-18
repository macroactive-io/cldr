<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIr;

/**
 * Luri
 *
 * @psalm-immutable
 */
class LanguageLrc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lrc';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryIr
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRule12
    {
        return new PluralRule12();
    }
}
