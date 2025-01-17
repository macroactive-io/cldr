<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Kashmiri
 *
 * @psalm-immutable
 */
class LanguageKs extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kashmiri';
    }

    public function code(): string
    {
        return 'ks';
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
