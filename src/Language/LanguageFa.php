<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LanguageFa - Representation of the Persian language.
 * @psalm-immutable
 */
class LanguageFa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fa';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryIr
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
