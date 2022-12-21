<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptHebr;
use Macroactive\Cldr\Territory\TerritoryIl;

/**
 * Hebrew
 *
 * @psalm-immutable
 */
class LanguageHe extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Hebrew';
    }

    public function code(): string
    {
        return 'he';
    }

    public function defaultScript(): ScriptHebr
    {
        return new ScriptHebr();
    }

    public function defaultTerritory(): TerritoryIl
    {
        return new TerritoryIl();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
