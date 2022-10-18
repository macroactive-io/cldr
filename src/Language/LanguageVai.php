<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptVaii;
use Macroactive\Cldr\Territory\TerritoryLr;

/**
 * Class LanguageVai - Representation of the Vai language.
 * @psalm-immutable
 */
class LanguageVai extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'vai';
    }

    public function defaultScript(): ScriptVaii
    {
        return new ScriptVaii();
    }

    public function defaultTerritory(): TerritoryLr
    {
        return new TerritoryLr();
    }
}
