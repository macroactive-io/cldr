<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Konkani
 *
 * @psalm-immutable
 */
class LanguageKok extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kok';
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
