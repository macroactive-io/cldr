<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryTj;

/**
 * Tajik
 *
 * @psalm-immutable
 */
class LanguageTg extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Tajik';
    }

    public function code(): string
    {
        return 'tg';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryTj
    {
        return new TerritoryTj();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
