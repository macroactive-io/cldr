<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKhmr;
use Macroactive\Cldr\Territory\TerritoryKh;

/**
 * Central Khmer
 *
 * @psalm-immutable
 */
class LanguageKm extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Khmer';
    }

    public function code(): string
    {
        return 'km';
    }

    public function defaultScript(): ScriptKhmr
    {
        return new ScriptKhmr();
    }

    public function defaultTerritory(): TerritoryKh
    {
        return new TerritoryKh();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
