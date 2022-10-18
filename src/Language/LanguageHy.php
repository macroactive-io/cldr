<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArmn;
use Macroactive\Cldr\Territory\TerritoryAm;

/**
 * Class LanguageHy - Representation of the Armenian language.
 * @psalm-immutable
 */
class LanguageHy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hy';
    }

    public function defaultScript(): ScriptArmn
    {
        return new ScriptArmn();
    }

    public function defaultTerritory(): TerritoryAm
    {
        return new TerritoryAm();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
