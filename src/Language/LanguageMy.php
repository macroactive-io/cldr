<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptMymr;
use Macroactive\Cldr\Territory\TerritoryMm;

/**
 * Burmese
 *
 * @psalm-immutable
 */
class LanguageMy extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Burmese';
    }

    public function code(): string
    {
        return 'my';
    }

    public function defaultScript(): ScriptMymr
    {
        return new ScriptMymr();
    }

    public function defaultTerritory(): TerritoryMm
    {
        return new TerritoryMm();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
