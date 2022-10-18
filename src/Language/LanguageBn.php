<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use Macroactive\Cldr\Territory\TerritoryBd;

/**
 * Bengali
 *
 * @psalm-immutable
 */
class LanguageBn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bn';
    }

    public function defaultScript(): ScriptBeng
    {
        return new ScriptBeng();
    }

    public function defaultTerritory(): TerritoryBd
    {
        return new TerritoryBd();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
