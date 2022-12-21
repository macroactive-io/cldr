<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptThaa;
use Macroactive\Cldr\Territory\TerritoryMv;

/**
 * Divehi
 *
 * @psalm-immutable
 */
class LanguageDv extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Dhivehi';
    }

    public function code(): string
    {
        return 'dv';
    }

    public function defaultScript(): ScriptThaa
    {
        return new ScriptThaa();
    }

    public function defaultTerritory(): TerritoryMv
    {
        return new TerritoryMv();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
