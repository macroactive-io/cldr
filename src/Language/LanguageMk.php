<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryMk;

/**
 * Macedonian
 *
 * @psalm-immutable
 */
class LanguageMk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mk';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryMk
    {
        return new TerritoryMk();
    }

    public function pluralRule(): PluralRule15
    {
        return new PluralRule15();
    }
}
