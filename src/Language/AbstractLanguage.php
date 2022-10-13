<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use Fisharebest\Localization\Territory\TerritoryInterface;

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
