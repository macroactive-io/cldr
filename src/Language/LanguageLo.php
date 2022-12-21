<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLaoo;
use Macroactive\Cldr\Territory\TerritoryLa;

/**
 * Lao
 *
 * @psalm-immutable
 */
class LanguageLo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Lao';
    }

    public function code(): string
    {
        return 'lo';
    }

    public function defaultScript(): ScriptLaoo
    {
        return new ScriptLaoo();
    }

    public function defaultTerritory(): TerritoryLa
    {
        return new TerritoryLa();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
