<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGrek;
use Macroactive\Cldr\Territory\TerritoryGr;

/**
 * Modern Greek (1453-)
 *
 * @psalm-immutable
 */
class LanguageEl extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Modern Greek (1453-)';
    }

    public function code(): string
    {
        return 'el';
    }

    public function defaultScript(): ScriptGrek
    {
        return new ScriptGrek();
    }

    public function defaultTerritory(): TerritoryGr
    {
        return new TerritoryGr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
