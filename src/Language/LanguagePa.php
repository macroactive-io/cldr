<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGuru;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Panjabi
 *
 * @psalm-immutable
 */
class LanguagePa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pa';
    }

    public function defaultScript(): ScriptGuru
    {
        return new ScriptGuru();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
