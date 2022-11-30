<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageSa - Representation of the Sanskrit language.

 *
 * @psalm-immutable
 */
class LanguageSa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sa';
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
