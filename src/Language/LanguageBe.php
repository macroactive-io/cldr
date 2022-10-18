<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryBy;

/**
 * Belarusian
 *
 * @psalm-immutable
 */
class LanguageBe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'be';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryBy
    {
        return new TerritoryBy();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
