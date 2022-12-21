<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTelu;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Telugu
 *
 * @psalm-immutable
 */
class LanguageTe extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Telugu';
    }

    public function code(): string
    {
        return 'te';
    }

    public function defaultScript(): ScriptTelu
    {
        return new ScriptTelu();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
