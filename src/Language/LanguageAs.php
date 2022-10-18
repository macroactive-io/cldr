<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Assamese
 *
 * @psalm-immutable
 */
class LanguageAs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'as';
    }

    public function defaultScript(): ScriptBeng
    {
        return new ScriptBeng();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
