<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIr;

/**
 * Class LanguageMzn - Representation of the Mazanderani language.
 * @psalm-immutable
 */
class LanguageMzn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mzn';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryIr
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRule12
    {
        return new PluralRule12();
    }
}
