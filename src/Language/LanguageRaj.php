<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageRaj - Representation of the Rajastani language.
 
 * @psalm-immutable
 */
class LanguageRaj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'raj';
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
