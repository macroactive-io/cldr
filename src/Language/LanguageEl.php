<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGrek;
use Macroactive\Cldr\Territory\TerritoryGr;

/**
 * Class LanguageEl - Representation of the Modern Greek (1453-) language.
 * @psalm-immutable
 */
class LanguageEl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'el';
    }

    public function defaultScript(): ScriptGrek
    {
        return new ScriptGrek();
    }

    public function defaultTerritory(): TerritoryGr
    {
        return new TerritoryGr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
