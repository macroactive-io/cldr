<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryNp;

/**
 * Nepali
 *
 * @psalm-immutable
 */
class LanguageNe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ne';
    }

    public function defaultScript(): ScriptDeva
    {
        return new ScriptDeva();
    }

    public function defaultTerritory(): TerritoryNp
    {
        return new TerritoryNp();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
