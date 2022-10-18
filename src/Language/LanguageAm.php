<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use Macroactive\Cldr\Territory\TerritoryEt;

/**
 * Amharic
 *
 * @psalm-immutable
 */
class LanguageAm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'am';
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
