<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptSyrc;
use Macroactive\Cldr\Territory\TerritoryIq;

/**
 * Syriac
 *
 * @psalm-immutable
 */
class LanguageSyr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'syr';
    }

    public function defaultScript(): ScriptSyrc
    {
        return new ScriptSyrc();
    }

    public function defaultTerritory(): TerritoryIq
    {
        return new TerritoryIq();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
