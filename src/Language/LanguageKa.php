<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGeor;
use Macroactive\Cldr\Territory\TerritoryGe;

/**
 * Georgian
 *
 * @psalm-immutable
 */
class LanguageKa extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Georgian';
    }

    public function code(): string
    {
        return 'ka';
    }

    public function defaultScript(): ScriptGeor
    {
        return new ScriptGeor();
    }

    public function defaultTerritory(): TerritoryGe
    {
        return new TerritoryGe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
