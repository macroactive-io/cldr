<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIq;

/**
 * Kurdish
 *
 * @psalm-immutable
 */
class LanguageCkb extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Central Kurdish';
    }

    public function code(): string
    {
        return 'ckb';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryIq
    {
        return new TerritoryIq();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
