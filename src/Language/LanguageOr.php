<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptOrya;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Oriya
 *
 * @psalm-immutable
 */
class LanguageOr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Oriya';
    }

    public function code(): string
    {
        return 'or';
    }

    public function defaultScript(): ScriptOrya
    {
        return new ScriptOrya();
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
