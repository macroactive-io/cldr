<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptSinh;
use Macroactive\Cldr\Territory\TerritoryLk;

/**
 * Sinhala
 *
 * @psalm-immutable
 */
class LanguageSi extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Sinhala';
    }

    public function code(): string
    {
        return 'si';
    }

    public function defaultScript(): ScriptSinh
    {
        return new ScriptSinh();
    }

    public function defaultTerritory(): TerritoryLk
    {
        return new TerritoryLk();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
