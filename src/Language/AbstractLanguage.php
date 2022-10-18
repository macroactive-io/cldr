<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleInterface;
use Macroactive\Cldr\PluralRule\PluralRuleUnknown;
use Macroactive\Cldr\Script\ScriptInterface;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory001;
use Macroactive\Cldr\Territory\TerritoryInterface;

/** @psalm-immutable */
abstract class AbstractLanguage implements LanguageInterface
{
    public function defaultTerritory(): TerritoryInterface
    {
        return new Territory001();
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptLatn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleUnknown();
    }
}
