<?php

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageBgc - Representation of the Haryanvi language.
 
 * @psalm-immutable
 */
class LanguageBgc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bgc';
    }

    public function defaultScript(): ScriptDeva
    {
        return new ScriptDeva();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
