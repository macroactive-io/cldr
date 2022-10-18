<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleTachelhit;
use Macroactive\Cldr\Script\ScriptTfng;
use Macroactive\Cldr\Territory\TerritoryMa;

/**
 * Class LanguageShi - Representation of the Tachelhit language.
 *
 * @psalm-immutable
 */
class LanguageShi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'shi';
    }

    public function defaultScript(): ScriptTfng
    {
        return new ScriptTfng();
    }

    public function defaultTerritory(): TerritoryMa
    {
        return new TerritoryMa();
    }

    public function pluralRule(): PluralRuleTachelhit
    {
        return new PluralRuleTachelhit();
    }
}
