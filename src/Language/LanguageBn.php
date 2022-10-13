<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryBd;

/**
 * Class LanguageBn - Representation of the Bengali language.
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
