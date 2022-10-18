<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptTibt;
use Macroactive\Cldr\Territory\TerritoryBt;

/**
 * Dzongkha
 *
 * @psalm-immutable
 */
class LanguageDz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dz';
    }

    public function defaultScript(): ScriptTibt
    {
        return new ScriptTibt();
    }

    public function defaultTerritory(): TerritoryBt
    {
        return new TerritoryBt();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
