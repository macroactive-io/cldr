<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageMai - Representation of the Maithili language.
 
 * @psalm-immutable
 */
class LanguageMai extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mai';
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
