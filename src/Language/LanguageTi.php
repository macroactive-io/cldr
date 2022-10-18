<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use Macroactive\Cldr\Territory\TerritoryEt;

/**
 * Class LanguageTi - Representation of the Tigrinya language.
 * @psalm-immutable
 */
class LanguageTi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ti';
    }

    public function defaultScript(): ScriptEthi
    {
        return new ScriptEthi();
    }

    public function defaultTerritory(): TerritoryEt
    {
        return new TerritoryEt();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
